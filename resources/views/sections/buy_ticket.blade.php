<section id="buy-tickets" class="section-with-bg wow fadeInUp">
  <div class="container">

    <div class="section-header">
      <h2>Registration</h2>
      <p>Registration fees</p>
      <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Table</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }
  th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #4CAF50;
    color: white;
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  tr:hover {
    background-color: #ddd;
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  .fadeIn {
    animation-name: fadeIn;
    animation-duration: 1s;
  }
</style>
</head>
<body>

<table class="fadeIn" border="1">
  <thead>
    <tr>
      <th>Category</th>
      <th>Early Registration<br>(31 January - 31 March 2023)</th>
      <th>Late Registration<br>(1 April - 19 May 2023)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Non-Student, Non-IEEE Member</td>
      <td>550€</td>
      <td>600€</td>
    </tr>
    <tr>
      <td>Non-Student, IEEE Member</td>
      <td>500€</td>
      <td>550€</td>
    </tr>
    <tr>
      <td>Student, Non-IEEE Member</td>
      <td>450€</td>
      <td>500€</td>
    </tr>
    <tr>
      <td>Student, IEEE Member</td>
      <td>400€</td>
      <td>450€</td>
    </tr>
    <tr>
      <td>Accompanying Person (participation in all social events)</td>
      <td>100€</td>
      <td>100€</td>
    </tr>
  </tbody>
</table>

</body>
</html>

    </div>

    <div class="row">
      @foreach($prices as $price)
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">{{ $price->name }}</h5>
              <h6 class="card-price text-center">${{ number_format($price->price) }}</h6>
              <hr>
              <ul class="fa-ul">
                @foreach($amenities as $amenity)
                  <li @if(!$price->amenities->contains($amenity->id))class="text-muted"@endif>
                    <span class="fa-li"><i class="fa fa-{{ $price->amenities->contains($amenity->id) ? 'check' : 'times' }}"></i></span>{{ $amenity->name }}
                  </li>
                @endforeach
              </ul>
              <hr>
              <div class="text-center">
                <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal" data-ticket-type="{{ Str::slug($price->name) }}">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      @endforeach
  </div>

  <!-- Modal Order Form -->
  <div id="buy-ticket-modal" class="modal fade">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Buy Tickets</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">
            <div class="form-group">
              <input type="text" class="form-control" name="your-name" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="your-email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <select id="ticket-type" name="ticket-type" class="form-control" >
                <option value="">-- Select Your Ticket Type --</option>
                @foreach($prices as $price)
                  <option value="{{ Str::slug($price->name) }}">{{ $price->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="text-center">
              <button type="submit" class="btn">Buy Now</button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</section>
