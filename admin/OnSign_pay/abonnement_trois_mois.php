<!DOCTYPE html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>
<h1>Abonnement de trois mois</h1>

<a id="paypal"></a>

<script>
    paypal.Button.render({
        env: 'sandbox', // Or 'sandbox',

        locale: 'fr_FR',

      style: {
        color: 'blue',
        size: 'medium'
      },

        payment: function(data, actions) {

            return paypal.request.post('payment_trois.php').then(function(data)
            {
               return data.id;
            });
        },

        onAuthorize: function(data, actions) {

            return paypal.request.post('pay.php',
            {
                paymentID: data.paymentID,
                payerID: data.payerID
            }).then(function(data)
            {
                console.log(data);
            }).catch(function (err)
            {
                console.log('erreur', err);
            });
        }
    }, '#paypal');
</script>
</body>