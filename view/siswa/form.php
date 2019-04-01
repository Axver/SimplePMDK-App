<?php

include "../../controller/connect.php";
?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}



#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form style='color:black;' id="regForm" action="/action_page.php">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Biodata:
    <p><input placeholder="NISN" oninput="this.className = ''" name="nisn"></p>
    <p><input placeholder="Nama" oninput="this.className = ''" name="nama"></p>
    <p><input placeholder="TTL" oninput="this.className = ''" name="ttl"></p>
    <p><input placeholder="Alamat" oninput="this.className = ''" name="alamat"></p>
  </div>
  <div class="tab">Next:
    <?php   
    $result = pg_query($conn,"SELECT id_status_bm, status
	FROM public.status_bidikmisi;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Bidikmisi:</b><select oninput="this.className = ''" name="bidikmisi" id="">
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['id_status_bm']?>"><?php echo $row['status']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>

        <?php   
    $result = pg_query($conn,"SELECT id_provinsi, provinsi
	FROM public.provinsi;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Provinsi:</b><select onchange='getKabupaten()'oninput="this.className = ''" name="provinsi" id="provinsi">
    <option value="provinsi">---Pilih Provinsi---</option>
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['id_provinsi']?>"><?php echo $row['provinsi']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>

    <p><b style='color:black;'>Kabupaten:</b>
    <select oninput="this.className = ''" name="kabupaten" id="kabupaten"></select>
    </p>

    <!-- Jenis Kelamin -->
    <?php   
    $result = pg_query($conn,"SELECT id_jk, jenis_kelamin
    FROM public.jenis_kelamin;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Jenis Kelamin:</b><select oninput="this.className = ''" name="jenis_kelamin" id="jenis_kelamin">
    
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['id_jk']?>"><?php echo $row['jenis_kelamin']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>


    <!-- Agama -->
    <?php   
    $result = pg_query($conn,"SELECT id_agama, agama
    FROM public.agama;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Jenis Kelamin:</b><select oninput="this.className = ''" name="agama" id="agama">
    
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['id_agama']?>"><?php echo $row['agama']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>

  </div>
  <div class="tab">Sekolah:
     <!-- Sekolah Asal -->
     <?php   
    $result = pg_query($conn,"SELECT npsn, username, nama_sekolah, alamat_sekolah
    FROM public.sekolah;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Sekolah Asal:</b><select oninput="this.className = ''" name="sekolah_asal" id="sekolah_asal">
    
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['npsn']?>"><?php echo $row['nama_sekolah']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>
    

        <!-- Asal Jurusan -->
        <?php   
    $result = pg_query($conn,"SELECT kode_jurusan, nama_jurusan
    FROM public.asal_jurusan;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Sekolah Asal:</b><select oninput="this.className = ''" name="sekolah_asal" id="sekolah_asal">
    
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['kode_jurusan']?>"><?php echo $row['nama_jurusan']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>
   
        <!-- Akselerasi -->
      
    
    <p><b style='color:black;'>Akselerasi:</b><select oninput="this.className = ''" name="akselerasi" id="akselerasi">
    
    <option value="Iya">Iya</option>
    <option value="Tidak">Tidak</option>

    
    
    
    </select>
    </p>
  </div>
  <div class="tab">Pilihan:
    
    <!-- Nama Politeknik -->
    <?php   
    $result = pg_query($conn,"SELECT id_politeknik, nama_politeknik
    FROM public.daftar_poltek;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Politeknik:</b><select onchange='getProdi()'oninput="this.className = ''" name="politeknik" id="politeknik">
    <option value="provinsi">---Pilih Politeknik---</option>
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['id_politeknik']?>"><?php echo $row['nama_politeknik']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>

    <!-- Prodi  -->
    <p><b style='color:black;'>Prodi:</b>
    <select oninput="this.className = ''" name="prodi1" id="prodi"></select>
    </p>

        <!-- Nama Politeknik 2-->
        <?php   
    $result = pg_query($conn,"SELECT id_politeknik, nama_politeknik
    FROM public.daftar_poltek;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Politeknik:</b><select onchange='getProdi2()'oninput="this.className = ''" name="politeknik2" id="politeknik2">
    <option value="provinsi">---Pilih Politeknik---</option>
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['id_politeknik']?>"><?php echo $row['nama_politeknik']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>

    <!-- Prodi  -->
    <p><b style='color:black;'>Prodi:</b>
    <select oninput="this.className = ''" name="prodi2" id="prodi2"></select>
    </p>

        <!-- Nama Politeknik 3 -->
        <?php   
    $result = pg_query($conn,"SELECT id_politeknik, nama_politeknik
    FROM public.daftar_poltek;");
    $rows = pg_num_rows($result);
    // echo $rows;
    ?>
    
    <p><b style='color:black;'>Politeknik:</b><select onchange='getProdi3()'oninput="this.className = ''" name="politeknik3" id="politeknik3">
    <option value="provinsi">---Pilih Politeknik---</option>
    <?php 
     while ($row=pg_fetch_assoc($result)) {
       ?>
    <option value="<?php echo $row['id_politeknik']?>"><?php echo $row['nama_politeknik']?></option>
    <?php
    }
    
    ?>
    
    
    </select>
    </p>

    <!-- Prodi  -->
    <p><b style='color:black;'>Prodi:</b>
    <select oninput="this.className = ''" name="prodi3" id="prodi3"></select>
    </p>

  </div>



  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function getKabupaten()
{
 var provinsi=document.getElementById("provinsi").value;
 console.log(provinsi);

   $.ajax({
            type: 'GET',
            url: '../../controller/siswa/kabupaten.php?id_provinsi=' + provinsi,
            success: function (html) {
            //   alert(html);
              var json=JSON.parse(html);
              console.log(JSON.parse(html));
              console.log(json.features[0].properties['id_kabupaten']);
              console.log(json.features[0].properties['nama_kabupaten']);
              console.log(json.features.length);
              var hapus = document.getElementById("kabupaten");
              $('#kabupaten').children().remove().end();
              i = 1;
              while (i <= json.features.length) {
                // alert(i);
                var x1 = document.getElementById("kabupaten");
                var option1 = document.createElement("option");
                option1.text = json.features[i].properties['nama_kabupaten'];
                option1.value = json.features[i].properties['id_kabupaten'];
                x1.add(option1);
                i++;
              }
            }
          });

}

function getProdi()
{
  var politeknik=document.getElementById("politeknik").value;
 console.log(provinsi);

   $.ajax({
            type: 'GET',
            url: '../../controller/siswa/prodi.php?id_politeknik=' + politeknik,
            success: function (html) {
            //   alert(html);
              var json=JSON.parse(html);
              var hapus = document.getElementById("prodi");
              $('#prodi').children().remove().end();
              i = 1;
              while (i <= json.features.length) {
                // alert(i);
                var x1 = document.getElementById("prodi");
                var option1 = document.createElement("option");
                option1.text = json.features[i].properties['nama_prodi'];
                option1.value = json.features[i].properties['id_prodi'];
                x1.add(option1);
                i++;
              }
            }
          });
}


function getProdi2()
{
  var politeknik=document.getElementById("politeknik").value;
 console.log(provinsi);

   $.ajax({
            type: 'GET',
            url: '../../controller/siswa/prodi.php?id_politeknik=' + politeknik,
            success: function (html) {
            //   alert(html);
              var json=JSON.parse(html);
              var hapus = document.getElementById("prodi2");
              $('#prodi2').children().remove().end();
              i = 1;
              while (i <= json.features.length) {
                // alert(i);
                var x1 = document.getElementById("prodi2");
                var option1 = document.createElement("option");
                option1.text = json.features[i].properties['nama_prodi'];
                option1.value = json.features[i].properties['id_prodi'];
                x1.add(option1);
                i++;
              }
            }
          });
}



function getProdi3()
{
  var politeknik=document.getElementById("politeknik").value;
 console.log(provinsi);

   $.ajax({
            type: 'GET',
            url: '../../controller/siswa/prodi.php?id_politeknik=' + politeknik,
            success: function (html) {
            //   alert(html);
              var json=JSON.parse(html);
              var hapus = document.getElementById("prodi3");
              $('#prodi3').children().remove().end();
              i = 1;
              while (i <= json.features.length) {
                // alert(i);
                var x1 = document.getElementById("prodi3");
                var option1 = document.createElement("option");
                option1.text = json.features[i].properties['nama_prodi'];
                option1.value = json.features[i].properties['id_prodi'];
                x1.add(option1);
                i++;
              }
            }
          });
}




    // PHP Ajax Show Kabupaten
    $(document).ready(function () {
      $('#provinsi1').on('change', function () {
        var provinsi = $(this).val();
        console.log(provinsi);
        if (provinsi) {
          $.ajax({
            type: 'GET',
            url: '../../../server/proses/postkabupaten.php?provinsi=' + provinsi,
            success: function (html) {
              alert(html);
              data = html.split('|');
              markerprov(data[0]);
              jumlah_kab = data.length;
              alert(jumlah_kab);
              // $('#kabupaten').html('<option value="'+data+'">'+data+'</option>'); 
              var hapus = document.getElementById("kabupaten");
              $('#kabupaten').children().remove().end();
              i = 1;
              while (i <= jumlah_kab - 2) {
                // alert(i);
                var x1 = document.getElementById("kabupaten");
                var option1 = document.createElement("option");
                option1.text = data[i];
                option1.value = data[i];
                x1.add(option1);
                i++;
              }
            }
          });
        } else {
          // $('#kabupaten').html('<option value="">- tidak ditemukan -</option>');   
        }
      });
    });
</script>

</body>
</html>
