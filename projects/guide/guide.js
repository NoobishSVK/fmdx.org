var receivers = [];
var discounts = true;

$(document).ready(function() {
  fetch('tuners.json')
  .then(response => response.json())
  .then(data => {
      // Populate panels container with product HTML
      var receiversContainer = $("#receivers");
      var accessoriesContainer = $("#accessories");
      var sparePartsContainer = $("#spare-parts");
      data.forEach(function(product) {
        if(product.type == "receiver") {
            receiversContainer.append(generateProductHTML(product));
        }

        if(product.type == "spare_part") {
            sparePartsContainer.append(generateProductHTML(product));
        }
      });


      $('.panel-description').hide();
      $('.buy').click(function(e) {
        e.stopPropagation();
      });
      $('.item').click(function() {
          var panel = $(this);
          var description = panel.next('.panel-description');

          if (panel.hasClass('open')) {
              panel.removeClass('open');
              description.hide();
          } else {
              panel.addClass('open');
              description.show();
          }
      });

      $('.item').first().trigger('click');
  })
  .catch(error => console.error('Error fetching data:', error));
});

function generateProductHTML(product) {
    fullPrice = product.price_full;
    let tableHTML = '';
    if (product.type === 'receiver') {
        tableHTML = `
            <table class="text-left">
                <tbody>
                    <tr style="padding: 5px;">
                        <td class="text-bold">Battery:</td>
                        <td>${product.battery}</td>
                    </tr>
                    <tr style="padding: 5px;">
                        <td class="text-bold">Firmware:</td>
                        <td>${product.firmware}</td>
                    </tr>
                    <tr style="padding: 5px;">
                        <td class="text-bold">PC Connection:&nbsp;&nbsp;&nbsp;</td>
                        <td>${product.pc_support}</td>
                    </tr>
                    <tr>
                        <td class="text-bold">Seller:</td>
                        <td>${product.seller}</td>
                    </tr>
                </tbody>
            </table>`;
    }

    return `
    <div class="panel-rollout">
        <div class="item flex-container flex-center flex-phone-column" style="${product.out_of_stock == 'true' ? 'background-color: #333' : ''} padding: 10px;">
            <div class="panel-square">
                <div class="m-auto" style="width: 64px; height: 64px; border-radius: 15px; overflow: hidden;">
                    <img src="img/tuners/${product.name}.webp" class="center" style="width: 100%; height: 100%; object-fit: cover;">
                </div>        
            </div>

            <div class="panel-50" style="padding: 10px;">
                <h3 class="text-left m-0 text-bold color-main text-center-phone" style="font-size: 20px; ${product.out_of_stock == 'true' ? 'color: #999' : ''}">${product.name_full}</h3>
                <p class="text-left m-0 text-center-phone" style="font-size: 14px;">${product.desc}</p>
            </div>

            <div class="panel-25 flex-center">
                <h4 class="m-0 text-bold" style="font-size: 20px;">${fullPrice}</h4>
                <div class="flex-container flex-phone flex-center">
                    ${generateStarRating(product.rating)}
                </div>
            </div>

            <div class="panel-25 flex flex-center">
                <a href="${product.link}" target="_blank" class="buy" style="${product.out_of_stock == 'true' ? 'background-color: #999' : ''}"><button class="btn-small m-auto">Buy</button></a>
            </div> 

            <div class="panel-square">
                <div class="chevron m-auto" style="width: 64px; height: 64px;">
                    <img src="img/chevron.png" class="center" style="width: 100%;height: 100%;">
                </div>
            </div>
        </div>
        <div class="panel-description">
            <div class="flex-container">
                <div class="panel-25" style="margin: 20px;">
                    <img src="img/tuners/${product.name}.webp" class="br-30 center" style="width: 100%;">
                </div>
                
                <div class="panel-75 text-left">
                    <h3 class="color-main m-0">Description:</h3>
                    <p>${product.desc_full}</p>
                </div>
            </div>

            <div class="panel-100 flex-container">
                <div class="panel-50" style="${product.type !== 'receiver' ? 'display:none' : ''}">
                    <h3 class="color-main">Specifications:</h3> 
                    <div class="flex-container flex-center">${tableHTML}</div>
                </div>

                <div class="panel-50">
                    <h3 class="color-main">Pros / Cons:</h3> 
                    <ul class="text-left" style="color: var(--color-green);">
                        ${product.pros.map(pro => `<li>${pro}</li>`).join('')}
                    </ul>

                    <ul class="text-left" style="color: var(--color-red);">
                        ${product.cons.map(con => `<li>${con}</li>`).join('')}
                    </ul>
                </div>
            </div>

            <div class="panel-100">
                <a href="${product.link}" target="_blank" class="buy"><button class="btn-small m-auto">Buy on AliExpress</button></a>
                <br>
                <p class="text-small">These links are affiliate links.<br> If you use uBlock Origin, you might need to click <strong>Proceed</strong> to open the AliExpress link.</p>
            </div>
        </div>
    </div>`;
}

  // Function to generate star rating
  function generateStarRating(rating) {
    var starsHTML = "";
    for (var i = 0; i < 5; i++) {
      if (i < rating) {
        starsHTML += '<div class="star"></div>';
      } else {
        starsHTML += '<div class="star empty"></div>';
      }
    }
    return starsHTML;
  }