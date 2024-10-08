<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>InvoicePDF</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
      .invoice .invoice-body {
  border-radius: 10px;
  padding: 25px;
  background: #fff;
}
.invoice .invoice-footer {
  padding: 15px;
  font-size: 0.9em;
  text-align: center;
  color: #999;
}

.logo {
  max-height: 70px;
  border-radius: 10px;
}

.dl-horizontal {
  margin: 0;
}
.dl-horizontal dt {
  float: left;
  width: 80px;
  overflow: hidden;
  clear: left;
  text-align: right;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.dl-horizontal dd {
  margin-left: 90px;
}

.rowamount {
  padding-top: 15px !important;
}

.rowtotal {
  font-size: 1.3em;
}

.colfix {
  width: 12%;
}

.mono {
  font-family: monospace;
}
        </style> 
    </head>
    <body class="">
     <h1>Download Invoice</h1>
     <div class="invoice-body">
    <div class="row">
      <div class="col-xs-5">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Company Details</h3>
          </div>
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Name</dt>
              <dd><strong>Acme Corporation</strong></dd>
              <dt>Industry</dt>
              <dd>Software Development</dd>
              <dt>Address</dt>
              <dd>Field 3, Moon</dd>
              <dt>Phone</dt>
              <dd>123.4456.4567</dd>
              <dt>Email</dt>
              <dd>mainl@acme.com</dd>
              <dt>Tax NO</dt>
              <dd class="mono">123456789</dd>
              <dt>Tax Office</dt>
              <dd>A' Moon</dd>
          </div>
        </div>
      </div>
      <div class="col-xs-7">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Customer Details</h3>
          </div>
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Name</dt>
              <dd>Microsoft Corporation</dd>
              <dt>Industry</dt>
              <dd>Software Development</dd>
              <dt>Address</dt>
              <dd>One Microsoft Way Redmond, WA 98052-7329, USA</dd>
              <dt>Phone</dt>
              <dd>(425) 882-8080</dd>
              <dt>Email</dt>
              <dd>contact@microsoft.com</dd>
              <dt>Tax NO</dt>
              <dd class="mono">123456789</dd>
              <dt>&nbsp;</dt>
              <dd>&nbsp;</dd>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Services / Products</h3>
      </div>
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Item / Details</th>
            <th class="text-center colfix">Unit Cost</th>
            <th class="text-center colfix">Sum Cost</th>
            <th class="text-center colfix">Discount</th>
            <th class="text-center colfix">Tax</th>
            <th class="text-center colfix">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              Lorem Ipsum Dolor
              <br>
              <small class="text-muted">The best lorem in town, try it now or leave forever</small>
            </td>
            <td class="text-right">
              <span class="mono">$1,000.00</span>
              <br>
              <small class="text-muted">Before Tax</small>
            </td>
            <td class="text-right">
              <span class="mono">$18,000.00</span>
              <br>
              <small class="text-muted">18 Units</small>
            </td>
            <td class="text-right">
              <span class="mono">- $1,800.00</span>
              <br>
              <small class="text-muted">Special -10%</small>
            </td>
            <td class="text-right">
              <span class="mono">+ $3,240.00</span>
              <br>
              <small class="text-muted">VAT 20%</small>
            </td>
            <td class="text-right">
              <strong class="mono">$19,440.00</strong>
              <br>
              <small class="text-muted mono">$16,200.00</small>
            </td>
          </tr>

          <tr>
            <td>
              Sit Amet Dolo
              <br>
              <small class="text-muted">Now you may sit</small>
            </td>
            <td class="text-right">
              <span class="mono">$120.00</span>
              <br>
              <small class="text-muted">Before Tax</small>
            </td>
            <td class="text-right">
              <span class="mono">$240.00</span>
              <br>
              <small class="text-muted">2 Units</small>
            </td>
            <td class="text-right">
              <span class="mono">- $0.00</span>
              <br>
              <small class="text-muted">-</small>
            </td>
            <td class="text-right">
              <span class="mono">+ $72.00</span>
              <br>
              <small class="text-muted">VAT:20% S:10%</small>
            </td>
            <td class="text-right">
              <strong class="mono">$312.00</strong>
              <br>
              <small class="text-muted mono">$240.00</small>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="panel panel-default">
      <table class="table table-bordered table-condensed">
        <thead>
          <tr>
            <td class="text-center col-xs-1">Sub Total</td>
            <td class="text-center col-xs-1">Discount</td>
            <td class="text-center col-xs-1">Total</td>
            <td class="text-center col-xs-1">Tax</td>
            <td class="text-center col-xs-1">Final</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="text-center rowtotal mono">$18,240.00</th>
            <th class="text-center rowtotal mono">-$1,800.00</th>
            <th class="text-center rowtotal mono">$16,440.00</th>
            <th class="text-center rowtotal mono">$3,312.00</th>
            <th class="text-center rowtotal mono">$19,752.00</th>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-xs-7">
        <div class="panel panel-default">
          <div class="panel-body">
            <i>Comments / Notes</i>
            <hr style="margin:3px 0 5px" /> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit repudiandae numquam sit facere blanditiis, quasi distinctio ipsam? Libero odit ex expedita, facere sunt, possimus consectetur dolore, nobis iure amet vero.
          </div>
        </div>
      </div>
      <div class="col-xs-5">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Payment Method</h3>
          </div>
          <div class="panel-body">
            <p>For your convenience, you may deposite the final ammount at one of our banks</p>
            <ul class="list-unstyled">
              <li>Alpha Bank - <span class="mono">MO123456789456123</span></li>
              <li>Beta Bank - <span class="mono">MO123456789456123</span></li>
              <li>Gamma Bank - <span class="mono">MO123456789456123</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    </body>
</html>
