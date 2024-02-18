<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        
      <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About The Event</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
  }
  h1 {
    color: white;
    font-size: 32px;
    font-weight: bold;
    animation: fadeIn 1s;
  }
  .paragraph {
    border: 2px solid #000;
    padding: 10px;
    margin-bottom: 20px;
    animation: fadeIn 1s;
  }
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
</style>
</head>
<body>

<h1>About The Event</h1>

<div class="paragraph">
  <p><strong>SCOPE:</strong> The Joint Urban Remote Sensing Event (JURSE) is a forum of excellence where researchers, practitioners, and students present, share, and discuss their latest findings and results. SPONSOR TYPE: 3; 5; 9; 9.</p>
</div>

<div class="paragraph">
  <p><strong>The Joint Urban Remote Sensing Event (JURSE)</strong> is a forum of excellence where researchers, practitioners, and students present, share, and discuss their latest findings and results. A very dynamic version of the JURSE organized by the Remote Sensing Lab of FORTH in Heraklion, Greece in May 2025.</p>
</div>

<div class="paragraph">
  <p>This event is committed to introducing innovative methodologies and technological resources recently employed to investigate the manifold aspects of the urban environment through orbital and airborne remote sensing data.</p>
</div>

<div class="paragraph">
  <p>Emerging topics like new methods for urban land cover and land use classification with detailed discrimination of urban targets, 3D modeling of urban buildings, forecast and impact assessment of natural and man-made hazards in urban areas, urban social studies, urban ecology, urban climatology, as well as data fusion, algorithms, and techniques for Earth Observation data interpretation were approached.</p>
</div>

</body>
</html>



        <p>{{ $settings['about_description'] ?? '' }}</p>
      </div>
      <div class="col-lg-3">
        <h3>Where</h3>
        <p>{!! $settings['about_where'] ?? '' !!}</p>
      </div>
      <div class="col-lg-3">
        <h3>When</h3>
        <p>{!! $settings['about_when'] ?? '' !!}</p>
      </div>
    </div>
  </div>
</section>
