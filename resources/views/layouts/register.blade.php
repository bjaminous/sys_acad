<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body class="register2">
    <div class="header">
        <img id="arrow" src="arrow-left.png" style="max-height: 40px;" class="arrow-left" alt="">
        <p>REGISTER COURSE</p>
        <img src="max.png" alt="" id="max" class="max" onclick="toggleFullscreen()">
        <img src="iclan_logo_white-5.png" class="img" style="max-height: 50px;" alt="">
    </div>
    <div id="container4" class="container4">
        <form class="register-form2" method="post">
            <p>Session :</p>
            <select name="session" id="session">
              <option value="">2020/2021</option>
              <option value="">2021/2022</option>
              <option value="">2022/2023</option>
              <option value="">2023/2024</option>
            </select>

            <p>Semester :</p>
            <select name="semester" id="semester">
              <option value="">First semester</option>
              <option value="">Second semester</option>
              <option value="">Third semester</option>
            </select>

            <p>Level :</p>
            <select name="level" id="level">
              <option value="">100</option>
              <option value="">200</option>
              <option value="">300</option>
            </select>
            <br><br><button type="reset" onclick="toggleTable()" >Display</button>
            <table id="Table_course" style="display: none;">
             <div class="thead" id="thead" style="display: none;">
              <h3 class="h2">Semester courses</h3>
              <h3  class="h1">Record count: 6</h3>
             </div>
              <tbody>
                  <tr style="background-color: rgb(206, 205, 205);">
                      <td>Course title</td>
                      <td>Code</td>
                      <td>Unit</td>
                      <td>Type</td>
                      <td>Session</td>
                      <td>Level</td>
                      <td>Semester</td>
                      <td>Status</td>
                      <td></td>
                  </tr>
                  <!-- Lignes du tableau avec alternance de couleurs -->
                  <!-- 10 lignes -->
                  <tr><td>The use of English I</td><td>GST101</td><td>2</td><td>GST</td><td>2010/2011</td><td>100</td><td>First semester</td><td>Current</td><td><input type="checkbox" name="" id=""></td></tr>
                  <tr><td>introduction to computer science</td><td>GST105</td><td>1</td><td>GST</td><td>2010/2011</td><td>100</td><td>First semester</td><td>Current</td><td><input type="checkbox" name="" id=""></td></tr>
                  <tr><td>introduction to Sociology I</td><td>SOC101</td><td>2</td><td>COC</td><td>2010/2011</td><td>100</td><td>First semester</td><td>Current</td><td><input type="checkbox" name="" id=""></td></tr>
                  <tr><td>History of Nigeria 1500-1800</td><td>HIB101</td><td>2</td><td>COC</td><td>2010/2011</td><td>100</td><td>First semester</td><td>Current</td><td><input type="checkbox" name="" id=""></td></tr>
                  <tr><td>Use of library and study skills</td><td>GST121</td><td>1</td><td>GST</td><td>2010/2011</td><td>100</td><td>First semester</td><td>Current</td><td><input type="checkbox" name="" id=""></td></tr>
                  <tr><td>intro. to philosophy and logic I</td><td>GST103</td><td>2</td><td>GST</td><td>2010/2011</td><td>100</td><td>First semester</td><td>Current</td><td><input type="checkbox" name="" id=""></td></tr>
                  <!-- Répétez la ligne ci-dessus pour les autres lignes -->

              </tbody>
          </table>

          <div class="btn_register">
            <button id="register_btn" type="button" style="display: none;" onclick="afficherAlerte()">Register</button>
            <button id="print_btn"  type="button" style="display: none;">Print</button>
          </div>
          </form>
    </div>
    <footer>
      Innovative Clan
      <br>
      Contact: +123456789
    </footer>
    <script src="script.js"></script>
</body>
<script>
    document.getElementById("arrow").addEventListener("click", function() {
    window.location.href = "{{ route('registration') }}"
});
</script>
</html>
