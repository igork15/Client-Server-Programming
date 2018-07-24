<?php





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chapter 17</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">
    
    
    <script   src="https://code.jquery.com/jquery-1.7.2.min.js" ></script>
       
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    
</head>

<body>
    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--12-col card-lesson mdl-card  mdl-shadow--2dp">
                  
                <div class="mdl-card__title mdl-color--deep-purple">
                  <h2 class="mdl-card__title-text mdl-color-text--white">Filter</h2>
                </div>
                <div class="mdl-card__supporting-text">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      
      
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="xpath" name="xpath" placeholder="Enter xpath expression" value="<?php echo $expr; ?>">

  </div>
  



  <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Filter</button>
  <hr>
  <p>
  <span class="help-block"><em>Some example expressions: <br>/Employees/Employee[City='Calgary']<br>/Employees/Employee[EmployeeId=3]</em></span>
  </p>
</form>   
                </div>
             </div>  <!-- / mdl-cell + mdl-card -->  
                  
             <div class="mdl-cell mdl-cell--12-col card-lesson mdl-card  mdl-shadow--2dp">     
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text ">Employees</h2>
                </div>
                <div class="mdl-card__supporting-text">
                     <table class="mdl-data-table  mdl-shadow--2dp">
                           <thead>
                            <tr>
                              <th>Id</th>
                              <th class="mdl-data-table__cell--non-numeric">First Name</th>
                              <th class="mdl-data-table__cell--non-numeric">Last Name</th>
                              <th class="mdl-data-table__cell--non-numeric">Title</th>
                              <th class="mdl-data-table__cell--non-numeric">Address</th>
                              <th class="mdl-data-table__cell--non-numeric">City</th>
                              <th class="mdl-data-table__cell--non-numeric">Phone</th>
                            </tr>
                          </thead>
                          <tbody>
                           
                             <?php /* loop through employees and display them in table */ ?>                               
                    
                          </tbody>
                     </table>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->
 
            </div>  <!-- / mdl-grid -->    

        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>