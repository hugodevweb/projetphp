<html lang="en">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./style/panier.css" rel="stylesheet">
  <title>Mon panier</title>
</head>

<body>
  <main>
    <div class="basket">
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Produit</li>
          <li class="price">Prix</li>
          <li class="quantity">Quantité</li>
          <li class="subtotal">Total</li>
        </ul>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">1</span> x NomMarque</strong> NomDuProduit</h1>
            <p><strong>Detail du produit</strong></p>
          </div>
        </div>
        <div class="price">26.00</div>
        <div class="quantity">
          <input type="number" value="4" min="1" class="quantity-field">
        </div>
        <div class="subtotal">104.00</div>
        <div class="remove">
          <button>Supprimer</button>
        </div>
      </div>
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
          </div>
          <div class="product-details">
            <h1><strong><span class="item-quantity">1</span> x NomMarque</strong> NomDuProduit</h1>
            <p><strong>Detail du produit</strong></p>
          </div>
        </div>
        <div class="price">26.00</div>
        <div class="quantity">
          <input type="number" value="4" min="1" class="quantity-field">
        </div>
        <div class="subtotal">104.00</div>
        <div class="remove">
          <button>Supprimer</button>
        </div>
      </div>
    </div>
    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Votre Panier</div>
        <div class="summary-subtotal">
          <div class="subtotal-title">Total</div>
          <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
          <div class="summary-promo hide">
          </div>
        </div>
        <div class="summary-delivery">
          <select name="delivery-collection" class="summary-delivery-selection">
              <option value="0" selected="selected">Moyen de paiement</option>
             <option value="collection">CB</option>
             <option value="first-class">Paypal</option>
             <option value="second-class">Bitcoin</option>
          </select>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">130.00</div>
        </div>
        <div class="summary-checkout">
          <button class="checkout-cta">Payer</button>
          
        </div>
      </div>
    </aside>
  </main>
</body>

</html>