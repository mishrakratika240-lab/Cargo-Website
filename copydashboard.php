 <div class="row" style="margin-top: 90px;">
          <div class="col-md-4">   
            <a class="success myDIV"  href="dashboard1.php"style=" box-shadow: 10px 10px lightgrey;">
              <i class="fa fa-bar-chart" style="background-color:red;"></i>
              <b>Register
               <?php include_once 'db-connection.php';
              $result = mysqli_query($conn,"SELECT count(*) as total FROM user_registrations");
                  // print_r('string');die();
              $data = mysqli_fetch_assoc($result);
              echo $data['total'];
            ?></b>
            </a>
          </div>
               
          <div class="col-md-4">   
            <a class="success myDIV" href="dashboard2.php"style=" box-shadow: 10px 10px lightgrey;">
              <i class="fa fa-check" style="font-size:px;color:red"></i><b>Booking
              <?php
                      include_once 'db-connection.php';

                    $result = mysqli_query($conn,"SELECT count(*) as total FROM cargo_bookings");
        // print_r('string');die();
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total'];
                  ?></b>
            </a>
          </div>
          <div class="col-md-4">    
              <a class="success1"  href="dashboard3.php"style=" box-shadow: 10px 10px lightgrey;">
                 <i class="fa fa-phone"></i><b> Contact
                  <?php
                      include_once 'db-connection.php';

                    $result = mysqli_query($conn,"SELECT count(*) as total FROM contact_us");
        // print_r('string');die();
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total'];
                  ?>
                  </b>
              </a>
          </div>
          <!-- <div class="col-md-3">    
              <a class="success1 " href="#"style=" box-shadow: 10px 10px lightgrey;">  Soon <i class="fa fa-spinner fa-spin" ></i>

              </a>
          </div>
        </div> -->
      <div class="container-fluid">

        <div class="row" style="margin-top: 190px; margin-left: ;">
              <div class="col-md-4">    
                  <a class="success2 " href="#"style=" box-shadow: 10px 10px lightgrey;"> Soon <i class="fa fa-spinner fa-spin" ></i>

                  </a>
              </div>
              <div class="col-md-4">    
                  <a class="success2 " href="#"style=" box-shadow: 10px 10px lightgrey;">  soon <i class="fa fa-spinner fa-spin" ></i>

                  </a>
              </div>
              <div class="col-md-4">    
                  <a class="success2 " href="#"style=" box-shadow: 10px 10px lightgrey;"> soon <i class="fa fa-spinner fa-spin"></i>

                  </a>
             <!--  </div>
              

              <div class="col-md-3">    
              <a class="success3 " href="#" style=" box-shadow: 10px 10px lightgrey;">  soon <i class="fa fa-spinner fa-spin" ></i>
              </a>
              </div> -->
        </div>
      </div>
    </div>
</body>
</html> 





CHANGEABLE CODE
 <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
        <div class="row" style="margin-top: 90px;">
          <div class="col-md-4">   
            <a class="success myDIV"  href="dashboard1.php"style=" box-shadow: 10px 10px lightgrey;">
              <i class="fa fa-bar-chart" style="background-color:red;"></i>
              <b>Register
               <?php include_once 'db-connection.php';
              $result = mysqli_query($conn,"SELECT count(*) as total FROM user_registrations");
                  // print_r('string');die();
              $data = mysqli_fetch_assoc($result);
              echo $data['total'];
            ?></b>
            </a>
          </div>
               
          <div class="col-md-4">   
            <a class="success myDIV" href="dashboard2.php"style=" box-shadow: 10px 10px lightgrey;">
              <i class="fa fa-check" style="font-size:px;color:red"></i><b>Booking
              <?php
                      include_once 'db-connection.php';

                    $result = mysqli_query($conn,"SELECT count(*) as total FROM cargo_bookings");
        // print_r('string');die();
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total'];
                  ?></b>
            </a>
          </div>
          <div class="col-md-4">    
              <a class="success1"  href="dashboard3.php"style=" box-shadow: 10px 10px lightgrey;">
                 <i class="fa fa-phone"></i><b> Contact
                  <?php
                      include_once 'db-connection.php';

                    $result = mysqli_query($conn,"SELECT count(*) as total FROM contact_us");
        // print_r('string');die();
                    $data = mysqli_fetch_assoc($result);
                    echo $data['total'];
                  ?>
                  </b>
              </a>
          </div>
          <!-- <div class="col-md-3">    
              <a class="success1 " href="#"style=" box-shadow: 10px 10px lightgrey;">  Soon <i class="fa fa-spinner fa-spin" ></i>

              </a>
          </div>
        </div> -->
      <div class="container-fluid">

        <div class="row" style="margin-top: 190px; margin-left: ;">
              <div class="col-md-4">    
                  <a class="success2 " href="#"style=" box-shadow: 10px 10px lightgrey;"> Soon <i class="fa fa-spinner fa-spin" ></i>

                  </a>
              </div>
              <div class="col-md-4">    
                  <a class="success2 " href="#"style=" box-shadow: 10px 10px lightgrey;">  soon <i class="fa fa-spinner fa-spin" ></i>

                  </a>
              </div>
              <div class="col-md-4">    
                  <a class="success2 " href="#"style=" box-shadow: 10px 10px lightgrey;"> soon <i class="fa fa-spinner fa-spin"></i>

                  </a>
             <!--  </div>
              

              <div class="col-md-3">    
              <a class="success3 " href="#" style=" box-shadow: 10px 10px lightgrey;">  soon <i class="fa fa-spinner fa-spin" ></i>
              </a>
              </div> -->
        </div>