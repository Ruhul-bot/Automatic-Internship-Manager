<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Automatic Internship System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
</head>
  <body>

    <link rel="stylesheet" href="style2.css">

   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>A<span>pprentee</span></h3>
            
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img logo" style="background-image: url(img/3.jpeg)">
                    <img src="aislogo.png" alt="Avatar" width="100" height="90">
                   

                </div>
                <h4>Admin</h4>
                <small>Automatic Internship System</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-user-alt"></span>
                            <small>Admin</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-user-friends"></span>
                            <small>Students list</small>

                        </a>
                    </li>

                

                    <!-- <li>
                       <a href="">
                            <span class="las la-envelope"></span>
                            <small>Mailbox</small>
                        </a>
                    </li>
                    <li>
                       <a href="">
                            <span class="las la-clipboard-list"></span>
                            <small>Internship</small>
                        </a>
                    </li>
                   
                    <li>
                       <a href="">
                            <span class="las la-tasks"></span>
                            <small>Tasks</small>
                        </a>
                    </li> -->

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                    <span class="barr">Automatic Internship System</span>
                </label>
                
                <div class="header-menu">
                    
                    <label for="">
                        <span class="las la-search"></span>
                    </label>
                    
                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>
                    
                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>
                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <span>
                        <a class="btn btn-outline-danger mx-2" type="submit" href="logout.php">Logout</a>
                        </span>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head example"><a href="student.php">
                            <h2>STUDENTS LIST</h2>  
                        </a>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>Number of students</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 6%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head example">
                            <a href="offerletter.php"><h2>Generate Offer Letter</h2></a>
                            
                            <span class="las la-clipboard-list"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 8%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head example">
                            <a href="certificate.php">
                                <h2>Generate Certificate</h2>
                            </a>                           
                            <span class="las la-clipboard-list"></span>
                        </div>
                        <div class="card-progress">
                            <small>No. of certificate generated</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 5%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head example">
                            <a href="mailto:ruhulaminsikdar000@gmail.com">
                                <h2>EMAIL</h2>
                            </a>
                            
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New E-mails received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 1%"></div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>
                            <button>Add record</button>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th><span class="las la-sort"></span> STUDENTS</th>
                                    <th><span class=""></span></th>
                                    <th><span class="las la-sort"></span> SUBMITTED DATE</th>
                                    <th><span class=""></span></th>
                                    <th><span class="las la-sort"></span> ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ST2354FPHT</td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                                            <div class="client-info">
                                                <h4>RUHUL</h4>
                                                <small>ruhul@gmail.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td></td>
                                    <td>
                                        04 March, 2024
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <div class="actions">
                                        <span class="material-symbols-outlined"></span>

                                            <!-- <span class="lab la-telegram-plane"></span> -->
                                            <span class="las la-eye"></span>
                                            <span class="las la-ellipsis-v"></span>
                                        </div>
                                    </td>
                                </tr>                                  
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            
            </div>
            
        </main>
        
    </div>
</body>
</html>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>