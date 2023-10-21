$(document).ready(function() {
  const currentPath = window.location.pathname;
  const urlParams = new URLSearchParams(window.location.search);
  const type = urlParams.get('type');
  const message = urlParams.get('message');
  
  VANTA.CLOUDS2({
    el: "#bg",
    mouseControls: true,
    touchControls: false,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    scale: 1.00,
    texturePath: "assets/img/noise.png"
  });

  if (type == 'success') {
    Swal.fire(
        'Success!',
         message,
        'success'
      )
  } else if (type == 'error') {
      Swal.fire(
          'Error!',
          message,
          'error'
        )
  }

  if (currentPath.includes("/stpeter/index.php")) {
    $('button[data-bs-target="#update"]').on('click', function() {
        var id = $(this).data('id');
        var fname = $(this).data('fname');
        var lname = $(this).data('lname');
        var plan = $(this).data('plan');
        var bdate = $(this).data('bdate');
        var address = $(this).data('address');
        $('input[name="id"]').val(id);
        $('input[name="fname"]').val(fname);
        $('input[name="lname"]').val(lname);
        $('select[name="plan"]').val(plan);
        $('input[name="bdate"]').val(bdate);
        $('input[name="address"]').val(address);
        console.log(id, fname, lname, plan, bdate, address);

    });

    $('button[data-bs-target="#delete"]').on('click', function() {
      var id = $(this).data('id');
      $('input[name="id"]').val(id);
      console.log(id);
  });
  } else if (currentPath.includes("/stpeter/gallery.php")) {
    $('button[data-bs-target="#update"]').on('click', function() {
        var id = $(this).data('id');
        $('input[name="id"]').val(id);
        console.log(id);

    });

    $('button[data-bs-target="#delete"]').on('click', function() {
      var id = $(this).data('id');
      $('input[name="id"]').val(id);
      console.log(id);
  });
  }

  console.log("Developer: Hash'J ❤️ Programming");
});

