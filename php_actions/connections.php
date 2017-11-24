

  <?php
//connection class
      class database {
          public $con;
          public function __construction(){



              $this->con = mysql_connect("localhost","root","","employee");

              if(!$this->con){
                  //message show if the connecion isn't connected
                  echo 'Database connection error'.mysqli_connect_error($this->con);
              }
              else
              {
                  echo "successfully connection";
              }
          }
      }




      ?>