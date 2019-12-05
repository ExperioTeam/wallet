<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experio.at is an innovative online platform that helps travelers and locals experience and host unique activities, day-trips and culinary experiences all over the world.">
    <meta property="og:image" content="https://experio.at/og_logo.png" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxbeier.github.io/text-spinners/spinners.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    

    <title>Experio: Share Your Passion</title>
    
</head>
<body>

<section>
  <div class="page-wrapper">
    <div id="page-content">
      <div class="container">
        <section>
          <div class="row">
              <div class="col-md-12 col-sm-12">
                  <div class="row">
                    <div class="center">
                      <h1>WALLET DEMO</h1>
                    </div>
                  </div>

                  <form class="form inputs-underline" enctype="multipart/form-data" method="post">
                      <section>
                        <div class="col-md-12 col-sm-12">
                          <div class="alert alert-info" id="redeem_alert">
                            <strong>Info!</strong> The wallet currently supports only Stellar testnet accounts.</a>.
                          </div>

                          <h3>Your Account</h3>

                          <div class="row">
                              <div class="col-md-6 col-sm-6">
                                  <div class="form-group">
                                      <label for="title">Public Key</label>
                                      <input type="text" class="form-control" name="public1" id="public1" placeholder="Public Key" value="">
                                  </div>
                              </div>

                              <div class="col-md-6 col-sm-6">
                                  <div class="form-group">
                                      <label for="title">Secret Key</label>
                                      <input type="text" class="form-control" name="secret1" id="secret1" placeholder="Secret Key" value="">
                                  </div>
                              </div>

                              <div class="w3-row-padding">
                                  <div class="w3-quarter">
                                    <div class="w3-card w3-hover-shadow w3-padding-32 w3-center">
                                        <h3><i class="fas">XLM</i> <i class="fas" id="balance_xlm">0.00</i></h3>
                                    </div>
                                  </div>

                                  <div class="w3-quarter">
                                    <div class="w3-card w3-hover-shadow w3-padding-32 w3-center">
                                      <h3><i class="fas">EUR</i> <i class="fas" id="balance_eur">0.00</i></h3>
                                    </div>
                                  </div>

                                  <div class="w3-quarter">
                                    <div class="w3-card w3-hover-shadow w3-padding-32 w3-center">
                                      <h3><i class="fas">XPT</i> <i class="fas" id="balance_xpt">0.00</i></h3>
                                    </div>
                                  </div>

                                  <div class="w3-quarter">
                                    <a href="#" onclick="javascript:alert('This feature is not available at the moment. ');return false;"><div class="w3-card w3-hover-shadow w3-padding-32 w3-center">
                                      <h3><i class="fas fa-plus" id="add_currency"></i></h3>
                                    </div></a>
                                  </div>
                                </div>

                          </div>

                          <div class="row center" style="padding-top: 20px">
                              <button type="button" id="view-balance-btn" class="btn btn-primary btn-rounded" onclick="getBalance()">View Balance</button>
                              <button type="button" id="generate-acc-btn" class="btn btn-primary btn-rounded" onclick="generateAccount()">Generate New Account</button>
                            </div>
                        </div>
                      </section>

                      <section>
                        <div class="col-md-12 col-sm-12">
                          <h3>Send Assets</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                      <label for="title">Send To</label>
                                      <input type="text" class="form-control" name="public2" id="public2" placeholder="Public Key" value="">
                                  </div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Token</label>
                                        <!-- <input type="text" class="form-control" name="to" id="to" placeholder="To" value="Account 2" disabled> -->
                                        <select class="form-control" name="token" id="token" placeholder="From">
                                          <option value="1" selected>XLM</option>
                                          <!-- <option value="2">XPT</option> -->
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="title">Amount</label>
                                        <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row center">
                              <button type="button" id="send-xlm-btn" class="btn btn-primary btn-rounded" onclick="sendXLM()">Send XLM</button>
                            </div>

                        </div>
                      </section>

                  </form>
              </div>
          </div>

      </div>
    </div>
  </div>

  
</section>

<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/js-stellar-sdk/stellar-sdk.min.js"></script>

<script>
var server = new StellarSdk.Server('https://horizon-testnet.stellar.org');

var experioAcc = {
    publicKey:"GASSHQVJ425PMYUETCMZ6BC7RZCI32XLYAOJYG4NE4RBGNPPCYPE4O7N",
    secretKey:"SDT2WTAWOYT3LGCPIDXRNRX7337AJ5YV4MNGBILRYQMSOCJJ4J4JUHUO"
  };

function getBalance(){

  var account1 = {
    publicKey: document.getElementById("public1").value
  }

  server.accounts()
  .accountId(account1.publicKey)
  .call()
  .then(function (accountResult) {
    console.log(accountResult);
    var bal = parseInt(accountResult.balances[0].balance).toFixed(2);
    document.getElementById("balance_xlm").innerHTML = " " + bal;
    $('#view-balance-btn').button('reset');
  })
  .catch(function (err) {
    console.error(err);
    alert("Error! Invalid public key.");
    $('#view-balance-btn').button('reset');
  })
}

function sendXLM(){
  var account1 = {
    publicKey: document.getElementById("public1").value,
    secretKey: document.getElementById("secret1").value
  }

  var account2 = {
    publicKey: document.getElementById("public2").value
  }

  var from = account1;
  var to = account2;

  var sourceSecretKey = from.secretKey;
  var sourceKeypair = StellarSdk.Keypair.fromSecret(sourceSecretKey);
  var sourcePublicKey = from.publicKey;
  var receiverPublicKey = to.publicKey;
  var amount = document.getElementById("amount").value;
  var asset = document.getElementById("token").value == 1 ? StellarSdk.Asset.native() : new StellarSdk.Asset('XPT', 'GDTX4YU6ASMHMOGSQRPKWY3QPNUVVG3FRHF4MQENTULRNGJ3D3X5GFKU');

  StellarSdk.Network.useTestNetwork();
  server.loadAccount(sourcePublicKey)
  .then(function(account) {
    var transaction = new StellarSdk.TransactionBuilder(account)
      // Add a payment operation to the transaction
      .addOperation(StellarSdk.Operation.payment({
        destination: receiverPublicKey,
        // asset: asset,
        // asset : StellarSdk.Asset.native(),
        asset : asset,
        amount: amount,
      }))
      // Uncomment to add a memo (https://www.stellar.org/developers/learn/concepts/transactions.html)
      // .addMemo(StellarSdk.Memo.text('Hello world!'))
      .build();

    transaction.sign(sourceKeypair);

    // Let's see the XDR (encoded in base64) of the transaction we just built
    console.log(transaction.toEnvelope().toXDR('base64'));

    // Submit the transaction to the Horizon server. The Horizon server will then
    // submit the transaction into the network for us.
    server.submitTransaction(transaction)
      .then(function(transactionResult) {
        console.log(JSON.stringify(transactionResult, null, 2));
        console.log('\nSuccess! View the transaction at: ');
        console.log(transactionResult._links.transaction.href);
        getBalance();
        alert("Transaction was successful!");
        $('#send-xlm-btn').button('reset');
      })
      .catch(function(err) {
        console.log('An error has occured:');
        console.log(err);
        alert("Transaction failed!");
        $('#send-xlm-btn').button('reset');
      });
  })
  .catch(function(e) {
    console.error(e);
  });
}

function getTransactions(){
  var accountId = account1.publicKey;

  server.transactions()
    .forAccount(accountId)
    .call()
    .then(function (page) {
        console.log('Page 1: ');
        console.log(page.records);
        // window.alert(page.records[0][0]);
        alert(JSON.stringify(page.records[0], null, 4));
        return page.next();
    })
    .then(function (page) {
        console.log('Page 2: ');
        console.log(page.records);
    })
    .catch(function (err) {
        console.log(err);
    });
}
</script>

<script>
function generateAccount(){
  StellarSdk.Network.useTestNetwork();

  var pair = StellarSdk.Keypair.random();
  var newPublic = pair.publicKey();

  var sourceSecretKey = experioAcc.secretKey;
  var sourceKeypair = StellarSdk.Keypair.fromSecret(sourceSecretKey);

  server.loadAccount(experioAcc.publicKey)
  .then(function(account){

      var transaction = new StellarSdk.TransactionBuilder(account)
          .addOperation(StellarSdk.Operation.createAccount({
              destination: newPublic,
              startingBalance: "100"
          }))

          .build();

      transaction.sign(sourceKeypair); // sign the transaction
      console.log(transaction.toEnvelope().toXDR('base64'));

      server.submitTransaction(transaction)
        .then(function(transactionResult) {
          console.log(JSON.stringify(transactionResult, null, 2));
          console.log('\nSuccess! View the transaction at: ');
          console.log(transactionResult._links.transaction.href);
          
          document.getElementById("public1").value = pair.publicKey();
          document.getElementById("secret1").value = pair.secret();
          getBalance();
          setTimeout(function() {
            alert("Success! Please save your public and secret key. If you lose them they cannot be recovered.");
          },10)
          $('#generate-acc-btn').button('reset');
      })
      .catch(function(err) {
          console.log('An error has occured:');
          console.log(err);
      });

  })
  .catch(function(err) {
      console.log('An error has occured:');
      console.log(err);
  });
}
</script>

<script>
$('view-balance-btn').button({loadingText: 'Loading <i class="fa fa-spinner fa-spin"></i>'});
$('#view-balance-btn').click(function () {
    var btn = $(this);
    btn.button('loading');
});

$('generate-acc-btn').button({loadingText: 'Generating <i class="fa fa-spinner fa-spin"></i>'});
$('#generate-acc-btn').click(function () {
    var btn = $(this);
    btn.button('loading');
});

$('send-xlm-btn').button({loadingText: 'Sending <i class="fa fa-spinner fa-spin"></i>'});
$('#send-xlm-btn').click(function () {
    var btn = $(this);
    btn.button('loading');
});
</script>

</body>
</html>