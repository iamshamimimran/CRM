<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<style>
    /* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
.sidebar{
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 78px;
  background: #11101D;
  padding: 6px 14px;
  z-index: 99;
  transition: all 0.5s ease;
}
.sidebar.open{
  width: 250px;
}
.sidebar .logo-details{
  height: 60px;
  display: flex;
  padding-left: 30px;
  align-items: center;
  position: relative;
}

.sidebar .logo-details .logo_name{
    display: flex;
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  opacity: 0;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details .icon,
.sidebar.open .logo-details .logo_name{
  opacity: 1;
}
.sidebar .logo-details #btn{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  font-size: 22px;
  transition: all 0.4s ease;
  font-size: 23px;
  text-align: center;
  cursor: pointer;
  transition: all 0.5s ease;
}
.sidebar.open .logo-details #btn{
  text-align: right;
}
.sidebar i{
  color: #fff;
  height: 60px;
  min-width: 50px;
  font-size: 28px;
  text-align: center;
  line-height: 60px;
}
.sidebar .nav-list{
  margin-top: 20px;
  height: 100%;
}
.sidebar li{
  position: relative;
  margin: 8px 0;
  list-style: none;
}
.sidebar li .tooltip{
  position: absolute;
  top: -20px;
  left: calc(100% + 15px);
  z-index: 3;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 15px;
  font-weight: 400;
  opacity: 0;
  white-space: nowrap;
  pointer-events: none;
  transition: 0s;
}
.sidebar li:hover .tooltip{
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
  top: 50%;
  transform: translateY(-50%);
}
.sidebar.open li .tooltip{
  display: none;
}
.sidebar input{
  font-size: 15px;
  color: #FFF;
  font-weight: 400;
  outline: none;
  height: 50px;
  width: 100%;
  width: 50px;
  border: none;
  border-radius: 12px;
  transition: all 0.5s ease;
  background: #1d1b31;
}
.sidebar.open input{
  padding: 0 20px 0 50px;
  width: 100%;
}
.sidebar .bx-search{
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 22px;
  background: #1d1b31;
  color: #FFF;
}
.sidebar.open .bx-search:hover{
  background: #1d1b31;
  color: #FFF;
}
.sidebar .bx-search:hover{
  background: #FFF;
  color: #11101d;
}
.sidebar li a{
  display: flex;
  height: 100%;
  width: 100%;
  border-radius: 12px;
  align-items: center;
  text-decoration: none;
  transition: all 0.4s ease;
  background: #11101D;
}
.sidebar li a:hover{
  background: #FFF;
}
.sidebar li a .links_name{
  color: #fff;
  font-size: 15px;
  font-weight: 400;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: 0.4s;
}
.sidebar.open li a .links_name{
  opacity: 1;
  pointer-events: auto;
}
.sidebar li a:hover .links_name,
.sidebar li a:hover i{
  transition: all 0.5s ease;
  color: #11101D;
}
.sidebar li i{
  height: 50px;
  line-height: 50px;
  font-size: 18px;
  border-radius: 12px;
}
.sidebar li.profile{
  position: fixed;
  height: 60px;
  width: 78px;
  left: 0;
  bottom: -8px;
  padding: 10px 14px;
  background: #1d1b31;
  transition: all 0.5s ease;
  overflow: hidden;
}
.sidebar.open li.profile{
  width: 250px;
  display: flex;
}
.sidebar li .profile-details{
  display: flex;
  align-items: center;
  flex-wrap: nowrap;
}

.sidebar li.profile .name{
  font-size: 15px;
  font-weight: 400;
  color: #fff;
  white-space: nowrap;
  padding-left: 30px;
}

.sidebar .profile #log_out{
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  background: #1d1b31;
  width: 100%;
  height: 60px;
  line-height: 60px;
  border-radius: 0px;
  transition: all 0.5s ease;
}
.sidebar.open .profile #log_out{
  width: 50px;
  background: none;
}

.nav-section{
    position: relative;
  background: #E4E9F7;
  min-height: 50px;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .nav-section{
  left: 250px;
  width: calc(100% - 250px);
}
.home-section{
  position: relative;
  background: #E4E9F7;
  min-height: 100vh;
  top: 0;
  left: 78px;
  width: calc(100% - 78px);
  transition: all 0.5s ease;
  z-index: 2;
}
.sidebar.open ~ .home-section{
  left: 250px;
  width: calc(100% - 250px);
}
.home-section .text{
  display: inline-block;
  color: #11101d;
  font-size: 25px;
  font-weight: 500;
  margin: 18px
}
@media (max-width: 420px) {
  .sidebar li .tooltip{
    display: none;
  }
}
/* Reset default browser styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Basic styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}



nav ul {
    list-style-type: none;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

nav ul li a:hover {
    color: #666;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 30px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

section h2 {
    margin-bottom: 20px;
}

form label {
    display: block;
    margin-bottom: 10px;
}

form input[type="text"],
form input[type="email"],
form input[type="password"],
form select,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

form input[type="checkbox"] {
    margin-right: 10px;
}

form button {
    padding: 10px 20px;
    background-color: #008000;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

form button:hover {
    background-color: #666;
}



   </style>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Xeotec</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="dashboard">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Messages</span>
       </a>
       <span class="tooltip">Messages</span>
     </li>
     <li>
       <a href="emailconfi">
       <i class='bx bxs-comment-detail'></i>
         <span class="links_name">Setup</span>
       </a>
       <span class="tooltip">Setup</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Analytics</span>
       </a>
       <span class="tooltip">Analytics</span>
     </li>
     <li>
       <a href="/file">
         <i class='bx bx-folder' ></i>
         <span class="links_name">File Manager</span>
       </a>
       <span class="tooltip">Files</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cart-alt' ></i>
         <span class="links_name">Order</span>
       </a>
       <span class="tooltip">Order</span>
     </li>
     <li>
       <a href="/customerDetails">
         <i class='bx bx-info-square' ></i>
         <span class="links_name">Customer Details</span>
       </a>
       <span class="tooltip">Customer Details</span>
     </li>
     <li>
       <a href="/setting">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
             <div class="name">Log Out</div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="nav-section">
  
    <nav>
        <!-- Navigation links -->
        <ul>
            <li><a href="#general">General</a></li>
            <li><a href="#notifications">Notifications</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#billing">Billing</a></li>
            <!-- Add more sections as needed -->
        </ul>
    </nav>

    <main>
        <section id="general">
        
        <h2> <i class='bx bxs-cog'></i> General Settings</h2>
            <!-- General settings form -->
            <form><form>
        <label for="companyName">Company Name</label>
        <input type="text" id="companyName" name="companyName">
        
        <label for="timezone">Timezone</label>
        <select id="timezone" name="timezone">
            <option value="gmt-12">GMT-12</option>
            <option value="gmt-11">GMT-11</option>
            <option value="gmt-10">GMT-10</option>
            <!-- Add more timezone options as needed -->
        </select>
        
        <label for="currency">Currency</label>
        <select id="currency" name="currency">
            <option value="usd">USD</option>
            <option value="eur">EUR</option>
            <option value="gbp">GBP</option>
            <!-- Add more currency options as needed -->
        </select>
        
        <label for="language">Language</label>
        <select id="language" name="language">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="de">German</option>
            <!-- Add more language options as needed -->
        </select>
       <!-- Add more fields as needed -->
                
                <button type="submit">Save Changes</button>
            </form>
        </section>

        <section id="notifications">
            <h2> <i class='bx bxs-bell-ring'></i> Notification Settings</h2>
            <!-- Notification settings form -->
            <form>
            
            <h3><i class='bx bx-envelope'></i> Email Notifications</h3>
            <label for="emailNotifications">
                <input type="checkbox" id="emailNotifications" name="emailNotifications">
                Receive email notifications
            </label>
            <div>
                <label for="emailFrequency">Email Frequency:</label>
                <select id="emailFrequency" name="emailFrequency">
                    <option value="immediately">Immediately</option>
                    <option value="daily">Daily</option>
                    <option value="weekly">Weekly</option>
                    <option value="monthly">Monthly</option>
                </select>
            </div>
        

        <div>
            <h3><i class='bx bxs-notification'></i> Push Notifications</h3>
            <label for="pushNotifications">
                <input type="checkbox" id="pushNotifications" name="pushNotifications">
                Receive push notifications
            </label>
            <div>
                <label for="pushFrequency">Push Frequency:</label>
                <select id="pushFrequency" name="pushFrequency">
                    <option value="instant">Instant</option>
                    <option value="hourly">Hourly</option>
                    <option value="daily">Daily</option>
                </select>
            </div>
        </div>

        <div>
            <h3> <i class='bx bx-message-rounded-detail'></i>SMS Notifications</h3>
            <label for="smsNotifications">
                <input type="checkbox" id="smsNotifications" name="smsNotifications">
                Receive SMS notifications
            </label>
            <div>
                <label for="smsFrequency">SMS Frequency:</label>
                <select id="smsFrequency" name="smsFrequency">
                    <option value="asap">As soon as possible</option>
                    <option value="daily">Daily</option>
                    <option value="daily">Weekly</option>
                    <option value="daily">Monthly</option>
                    <option value="daily">Never</option>
                </select>
            </div>
     </div> 
        
         
                
                <!-- Add more notification preferences as needed -->
                
                <button type="submit">Save Changes</button>
            </form>
        </section>

        <section id="profile">
            <h2> <i class='bx bx-user-circle'></i> Profile Settings</h2>
            <!-- Profile settings form -->
            <form>
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName">

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">
                
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">
                
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
                
                <label for="city">City</label>
                <input type="text" id="city" name="city">
                
                <label for="zip">PIN Code</label>
                <input type="text" id="pin" name="pin">
                
                <label for="country">Country</label>
                <input type="text" id="country" name="country">
        
                
                <!-- Add more profile fields as needed -->
                
                <button type="submit">Save Changes</button>
            </form>
        </section>

        <section id="billing">
            <h2><i class='bx bxs-report'></i> Billing Settings</h2>
            <!-- Billing settings form -->
           <form> 
        <label for="billingName">Billing Name</label>
        <input type="text" id="billingName" name="billingName">
        
        <label for="billingEmail">Billing Email Address</label>
        <input type="email" id="billingEmail" name="billingEmail">
        
        <label for="billingAddress">Billing Address</label>
        <input type="text" id="billingAddress" name="billingAddress">
        
        <label for="billingCity">Billing City</label>
        <input type="text" id="billingCity" name="billingCity">
        
        <label for="billingState">Billing State</label>
        <input type="text" id="billingState" name="billingState">
        
        <label for="billingZip">Billing PIN/Postal Code</label>
        <input type="text" id="billingZip" name="billingZip">
        
        <label for="billingCountry">Billing Country</label>
        <input type="text" id="billingCountry" name="billingCountry">
        
        <label for="paymentMethod"> Payment Method</label>
        <i class='bx bxs-credit-card'></i><i class='bx bxl-paypal' ></i><i class='bx bxs-bank' ></i>

        <select id="paymentMethod" name="paymentMethod">
            <option value="creditCard">Credit Card</option>
            <option value="paypal">PayPal</option>
            <option value="bankTransfer">Bank Transfer</option>
            <!-- Add more payment options as needed -->
        </select>
        
        <label for="creditCardNumber">Credit Card Number</label>
        <input type="text" id="creditCardNumber" name="creditCardNumber">
        
        <label for="expirationDate">Expiration Date</label>
        <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YYYY">
        
        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv">
                
                <!-- Add more billing fields as needed -->
                
                <button type="submit">Save Changes</button>
            </form>
        </section>
    </main>

  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>