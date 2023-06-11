 <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="display: flex;align-items: center;justify-content: center">
                <div class="card" >
                    <div class="card-body">
                        <h4>Order Cost: {{$total_amount}}</h4>
                        <div id="paypal-button-container"  style="width: 150%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.paypal.com/sdk/js?client-id=ARd6Dm9tLc6-VmkF6bH3ENT62GgkR5XqN9mq4km3f-otTRYsPNv941fxc3kjY0LbaN_Rb5jB2z_Kv91i&currency=USD"></script>
    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                // Set up the transaction
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: {{$total_amount}},
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // Capture the funds from the transaction
                return actions.order.capture().then(function(details) {
                    // Redirect to success page or display success message
                    window.location.href = '/sssuccess';
                });
            }
        }).render('#paypal-button-container');
    </script>
    </body>
    </html>


