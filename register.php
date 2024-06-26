<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="TemplateMo" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
      rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>Sun Services</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/decor_project.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />
  </head>
  <body>
    <!-- Sub Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="right-icons align-self-right">
            <ul>
              <li>
                <a href="https://www.facebook.com"
                  ><i class="fa fa-facebook"></i
                ></a>
              </li>
              <li>
                <a href="https://www.instagram.com"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li>
                <a href="https://www.linkedin.com"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav class="main-nav">
              <!-- ***** Logo Start ***** -->

              <div class="nav1">
                <img
                  src="assets/images/nav_logo.png"
                  class="img-fluid"
                />
              </div>

              <a href="index.html" class="logo">
                Sun Services<br />
                <h4 class="slogen">One Stop Solar Solution</h4>
              </a>

              <!-- ***** Logo End ***** -->
              <!-- ***** Menu Start ***** -->
              <ul class="nav">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li>
                  <a href="register.php" class="active"
                    >Service Ragistration</a
                  >
                </li>
                <li><a href="service2.php">Service</a></li>
                <li class="scroll-to-section">
                  <a href="#queries">About us</a>
                </li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="testimonial.php">Testimonial</a></li>
              </ul>
              <a class="menu-trigger">
                <span>Menu</span>
              </a>
              <!-- ***** Menu End ***** -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <section class="section main-banner1" id="top">
      <div class="video-overlay1 header-text">
        <div class="container">
          <div class="row">
            <div class="caption col-lg-4">
              <div class="row">
                <form id="register">
                  <div class="col-lg-12">
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <h3>Service Registration</h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col" style="padding-bottom: 20px">
                        <lable class="form-lable" style="color: cornsilk"
                          >Name</lable
                        >
                        <input
                          type="text"
                          class="form-control"
                          placeholder=" Name"
                          aria-label="name"
                          id="name"
                          aria-describedby="addon-wrapping"
                          required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col" style="padding-bottom: 20px">
                        <lable class="form-lable" style="color: cornsilk"
                          >Number</lable
                        >
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Calling Number"
                          aria-label="phoneno"
                          id="phoneno"
                          aria-describedby="addon-wrapping"
                          required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col" style="padding-bottom: 20px">
                        <lable class="form-lable" style="color: cornsilk"
                          >Mail Id</lable
                        >
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Enter Mail Id"
                          aria-label="email"
                          id="email"
                          aria-describedby="addon-wrapping"
                          required
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col" style="padding-bottom: 20px">
                        <lable class="form-lable" style="color: cornsilk"
                          >Address</lable
                        >
                        <textarea
                          class="form-control"
                          placeholder="Enter Address"
                          aria-label="address"
                          id="address"
                          aria-describedby="addon-wrapping"
                          required
                        ></textarea>
                      </div>
                      <div class="row">
                        <div class="col" style="padding-bottom: 20px">
                          <lable class="form-lable" style="color: cornsilk"
                            >Select Date And time</lable
                          >
                          <input
                            type="date"
                            class="form-control"
                            name="date"
                            id="date"
                            required
                          />
                        </div>
                        <div class="col">
                          <label class="form-lable" style="color: cornsilk">
                            <input
                              type="radio"
                              class="form-radio1"
                              name="timeslot"
                              id="slot"
                              value="morning"
                              style="color: cornsilk"
                              onclick="choice('Morning')"
                              required
                            />Moring Slot</label
                          ><lable class="form-lable" style="color: cornsilk"
                            ><input
                              type="radio"
                              name="timeslot"
                              class="form-radio1"
                              id="slot"
                              value="afternoon"
                              style="color: cornsilk"
                              onclick="choice('Afternoon')"
                              required
                            />Afternoon Slot</lable
                          >
                        </div>
                      </div>
                      <div class="row" id="row1">
                        <div class="col" style="padding-bottom: 20px">
                          <lable class="form-lable" style="color: cornsilk"
                            ><input
                              class="form-radio"
                              type="radio"
                              name="m_slot"
                              id="m_time"
                              value="9:00"
                              style="color: cornsilk"
                              required
                            />9:00</lable
                          >
                          <lable class="form-lable" style="color: cornsilk"
                            ><input
                              class="form-radio"
                              type="radio"
                              name="m_slot"
                              id="m_time"
                              value="11:00"
                              style="color: cornsilk"
                              required
                            />11:00</lable
                          >
                        </div>
                      </div>
                      <div class="row" id="row2">
                        <div class="col" style="padding-bottom: 20px">
                          <lable class="form-lable" style="color: cornsilk"
                            ><input
                              class="form-radio"
                              type="radio"
                              name="a_slot"
                              id="a_time"
                              value="3:00"
                              style="color: cornsilk"
                              required
                            />3:00</lable
                          >
                          <lable class="form-lable" style="color: cornsilk"
                            ><input
                              class="form-radio"
                              type="radio"
                              name="a_slot"
                              id="a_time"
                              value="5:00"
                              style="color: cornsilk"
                              required
                            />5:00</lable
                          >
                          <lable class="form-lable" style="color: cornsilk"
                            ><input
                              class="form-radio"
                              type="radio"
                              name="a_slot"
                              id="a_time"
                              value="7:00"
                              style="color: cornsilk"
                              required
                            />7:00</lable
                          >
                        </div>
                      </div>
                      <div class="row">
                        <div class="col" style="padding-bottom: 20px">
                          <input
                            type="submit"
                            id="submit"
                            name="submit"
                            class="btn btn-primary"
                            onclick="window.location.href='register2.php';"
                            value="submit"
                          />
                        </div>
                        <div class="col">
                          <input
                            type="reset"
                            class="btn btn-primary"
                            value="reset"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="more-queries1" id="about">
      <div class="footer" style="margin-top: 1200px" >
        <div class="col-lg-3" style="padding-bottom: -10px">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>+91 1234567890</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>sunservices@gmail.com</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>any where in rajkot</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    </section>


    <script type="text/JavaScript">

  $(function(){
      var dtToday = new Date();

      var month = dtToday.getMonth() + 1;
      var day = dtToday.getDate();
      var year = dtToday.getFullYear();
      if(month < 10)
          month = '0' + month.toString();
      if(day < 10)
      day = '0' + day.toString();
      var maxDate = year + '-' + month + '-' + day;
      $('#date').attr('min', maxDate);
  });

  function choice(Slot) {
      console.log(Slot);
        if(Slot == 'Morning')
        {
          document.getElementById('row1').style.display = "block";
          document.getElementById('row2').style.display = "none";
        }
        else
        {
          document.getElementById('row2').style.display = "block";
          document.getElementById('row1').style.display = "none";
        }
  }

    $(document).ready(function(){
      $("#submit").on("click" , function(){
        let name =$("#name").val();
        let phoneno = $("#phoneno").val();
        let email = $("#email").val();
        let address = $("#address").val();
        let date = $("#date").val();
        let slot = $(".form-radio1:checked").val();
        let time = $(".form-radio:checked").val();

       // alert("entered name is " + name +"\n"+ phoneno +"\n"+ email +"\n"+ address +"\n"+ date +"\n"+ slot +"\n"+ time);

        $.ajax({
          url: "http://localhost/solar/php/insert.php",
          method:"POST",
          data :JSON.stringify({
            action: "insertdata_personal",
            name:name ,
            number: phoneno,
            email: email,
            address: address,
            date: date,
            slot: slot,
            time: time,
          }),
          success: function (resp) {
          console.log("data add.");
        },
        error:  function (jqXHR, textStatus, errorThrown) {
          alert(errorThrown);
          console.log(errorThrown);
        },
        });
      });
    });

      function validateform(){
      let n = $("#number").val();

      if (isNaN(n)) {
              alert("Please enter Numeric value");
              return false;
          }
          else{
            submit1();
          }

      }
    </script>
  </body>
</html>
