<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css'><link rel="stylesheet" href="./style.css">

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
  /* abc */
  body {
  background: #89909f;
  padding: 3rem 0 0 3rem;
  font-size: 12px;
  height: 100vh;
  margin: 0;
  overflow: hidden;
}

.site-wrap {
  display: grid;
  grid-template-columns: 280px 1fr;
}

.site-nav {
  background: #0b121b;
  color: white;
  border-top-left-radius: 2rem;
  display: flex;
  flex-direction: column;
}
.site-nav a {
  color: inherit;
}
.site-nav ul {
  margin-bottom: auto;
}
.site-nav ul li a {
  display: block;
  padding: 0.75rem 0.5rem 0.75rem 2rem;
  position: relative;
}
.site-nav ul li a:hover, .site-nav ul li a:focus {
  color: #4371c5;
}
.site-nav ul li.active > a {
  background: linear-gradient(to right, #101b2d, transparent);
}
.site-nav ul li.active > a::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  background: #4676cd;
  width: 5px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.site-nav ul ul {
  padding-left: 1rem;
  margin-bottom: 0.5rem;
}
.site-nav ul ul a {
  padding-top: 0.4rem;
  padding-bottom: 0.4rem;
}

.note {
  width: calc(100% - 6rem);
  margin: 2rem;
  background: #171c26;
  border-radius: 10px;
  padding: 1rem;
}
.note h3 {
  font-size: 0.9rem;
  margin: 0 0 0.4rem 0;
}
.note p {
  color: #717783;
}

.name {
  font-size: 1.3rem;
  position: relative;
  margin: 2rem 0 2rem 0;
  padding: 0 2.5rem 0.5rem 2rem;
  width: calc(100% - 3rem);
}
.name svg {
  position: absolute;
  fill: white;
  width: 16px;
  height: 16px;
  right: 0;
  top: 7px;
}
.name::after {
  content: "";
  width: 8px;
  height: 8px;
  background: #4777ce;
  border-radius: 20px;
  position: absolute;
  top: 6px;
  right: -2px;
}

main {
  border-top-left-radius: 2rem;
  background: #ebecee;
  margin-left: -2rem;
  position: relative;
}
main > header {
  padding: 3rem 3rem 0 3rem;
}

.content-columns {
  padding: 3rem;
  display: flex;
  background: #e5e5e9;
}
.content-columns .col {
  min-height: 500px;
  width: 200px;
  padding: 1rem;
  background: #ebecee;
  margin-right: 1rem;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.04);
  border-radius: 5px;
}
.content-columns .col:nth-child(1) {
  border-top: 4px solid #50aaee;
}
.content-columns .col:nth-child(2) {
  border-top: 4px solid #d56ec7;
}
.content-columns .col:nth-child(3) {
  border-top: 4px solid #e37e55;
}
.content-columns .col:nth-child(4) {
  border-top: 4px solid #ebbd41;
}

.item {
  background: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.07);
  min-height: 50px;
  border-radius: 5px;
  margin: 0 0 0.5rem 0;
}

.nav-tabs a {
  margin-right: 2rem;
  display: inline-block;
  padding: 1rem 0 1rem 0;
  font-size: 1.15rem;
  color: #8c939e;
  position: relative;
}
.nav-tabs a.active {
  color: #101620;
  font-weight: 600;
}
.nav-tabs a.active span {
  background: #d9dfea;
  color: #5887d1;
}
.nav-tabs a.active::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 4px;
  background: #457ace;
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
}
.nav-tabs a span {
  border-radius: 10px;
  font-size: 0.8rem;
  padding: 0.25rem 0.4rem;
  font-weight: 600;
  vertical-align: middle;
  position: relative;
  top: -2px;
  background: #dfe0e2;
  color: #868d99;
}
}


/* Main CSS Here */

@import url( 
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"); 

* { 
margin: 0; 
padding: 0; 
box-sizing: border-box; 
font-family: "Poppins", sans-serif; 
} 
:root { 
--background-color1: #fafaff; 
--background-color2: #ffffff; 
--background-color3: #ededed; 
--background-color4: #cad7fda4; 
--primary-color: #4b49ac; 
--secondary-color: #0c007d; 
--Border-color: #3f0097; 
--one-use-color: #3f0097; 
--two-use-color: #5500cb; 
} 
body { 
background-color: var(--background-color4); 
max-width: 100%; 
overflow-x: hidden; 
} 

header { 
height: 70px; 
width: 100vw; 
padding: 0 30px; 
background-color: var(--background-color1); 
position: fixed; 
z-index: 100; 
box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825); 
display: flex; 
justify-content: space-between; 
align-items: center; 
} 

.logo { 
font-size: 27px; 
font-weight: 600; 
color: rgb(47, 141, 70); 
} 

.icn { 
height: 30px; 
} 
.menuicn { 
cursor: pointer; 
} 

.searchbar, 
.message, 
.logosec { 
display: flex; 
align-items: center; 
justify-content: center; 
} 

.searchbar2 { 
display: none; 
} 

.logosec { 
gap: 60px; 
} 

.searchbar input { 
width: 250px; 
height: 42px; 
border-radius: 50px 0 0 50px; 
background-color: var(--background-color3); 
padding: 0 20px; 
font-size: 15px; 
outline: none; 
border: none; 
} 
.searchbtn { 
width: 50px; 
height: 42px; 
display: flex; 
align-items: center; 
justify-content: center; 
border-radius: 0px 50px 50px 0px; 
background-color: var(--secondary-color); 
cursor: pointer; 
} 

.message { 
gap: 40px; 
position: relative; 
cursor: pointer; 
} 
.circle { 
height: 7px; 
width: 7px; 
position: absolute; 
background-color: #fa7bb4; 
border-radius: 50%; 
left: 19px; 
top: 8px; 
} 
.dp { 
height: 40px; 
width: 40px; 
background-color: #626262; 
border-radius: 50%; 
display: flex; 
align-items: center; 
justify-content: center; 
overflow: hidden; 
} 
.main-container { 
display: flex; 
width: 100vw; 
position: relative; 
top: 70px; 
z-index: 1; 
} 
.dpicn { 
height: 42px; 
} 

.main { 
height: calc(100vh - 70px); 
width: 100%; 
overflow-y: scroll; 
overflow-x: hidden; 
padding: 40px 30px 30px 30px; 
} 

.main::-webkit-scrollbar-thumb { 
background-image: 
		linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50)); 
} 
.main::-webkit-scrollbar { 
width: 5px; 
} 
.main::-webkit-scrollbar-track { 
background-color: #9e9e9eb2; 
} 

.box-container { 
display: flex; 
justify-content: space-evenly; 
align-items: center; 
flex-wrap: wrap; 
gap: 50px; 
} 
.nav { 
min-height: 91vh; 
width: 250px; 
background-color: var(--background-color2); 
position: absolute; 
top: 0px; 
left: 00; 
box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825); 
display: flex; 
flex-direction: column; 
justify-content: space-between; 
overflow: hidden; 
padding: 30px 0 20px 10px; 
} 
.navcontainer { 
height: calc(100vh - 70px); 
width: 250px; 
position: relative; 
overflow-y: scroll; 
overflow-x: hidden; 
transition: all 0.5s ease-in-out; 
} 
.navcontainer::-webkit-scrollbar { 
display: none; 
} 
.navclose { 
width: 80px; 
} 
.nav-option { 
width: 250px; 
height: 60px; 
display: flex; 
align-items: center; 
padding: 0 30px 0 20px; 
gap: 20px; 
transition: all 0.1s ease-in-out; 
} 
.nav-option:hover { 
border-left: 5px solid #a2a2a2; 
background-color: #dadada; 
cursor: pointer; 
} 
.nav-img { 
height: 30px; 
} 

.nav-upper-options { 
display: flex; 
flex-direction: column; 
align-items: center; 
gap: 30px; 
} 

.option1 { 
border-left: 5px solid #010058af; 
background-color: var(--Border-color); 
color: white; 
cursor: pointer; 
} 
.option1:hover { 
border-left: 5px solid #010058af; 
background-color: var(--Border-color); 
} 
.box { 
height: 130px; 
width: 230px; 
border-radius: 20px; 
box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751); 
padding: 20px; 
display: flex; 
align-items: center; 
justify-content: space-around; 
cursor: pointer; 
transition: transform 0.3s ease-in-out; 
} 
.box:hover { 
transform: scale(1.08); 
} 

.box:nth-child(1) { 
background-color: var(--one-use-color); 
} 
.box:nth-child(2) { 
background-color: var(--two-use-color); 
} 
.box:nth-child(3) { 
background-color: var(--one-use-color); 
} 
.box:nth-child(4) { 
background-color: var(--two-use-color); 
} 

.box img { 
height: 50px; 
} 
.box .text { 
color: white; 
} 
.topic { 
font-size: 13px; 
font-weight: 400; 
letter-spacing: 1px; 
} 

.topic-heading { 
font-size: 30px; 
letter-spacing: 3px; 
} 

.report-container { 
min-height: 300px; 
max-width: 1200px; 
margin: 70px auto 0px auto; 
background-color: #ffffff; 
border-radius: 30px; 
box-shadow: 3px 3px 10px rgb(188, 188, 188); 
padding: 0px 20px 20px 20px; 
} 
.report-header { 
height: 80px; 
width: 100%; 
display: flex; 
align-items: center; 
justify-content: space-between; 
padding: 20px 20px 10px 20px; 
border-bottom: 2px solid rgba(0, 20, 151, 0.59); 
} 

.recent-Articles { 
font-size: 30px; 
font-weight: 600; 
color: #5500cb; 
} 

.view { 
height: 35px; 
width: 90px; 
border-radius: 8px; 
background-color: #5500cb; 
color: white; 
font-size: 15px; 
border: none; 
cursor: pointer; 
} 

.report-body { 
max-width: 1160px; 
overflow-x: auto; 
padding: 20px; 
} 
.report-topic-heading, 
.item1 { 
width: 1120px; 
display: flex; 
justify-content: space-between; 
align-items: center; 
} 
.t-op { 
font-size: 18px; 
letter-spacing: 0px; 
} 

.items { 
width: 1120px; 
margin-top: 15px; 
} 

.item1 { 
margin-top: 20px; 
} 
.t-op-nextlvl { 
font-size: 14px; 
letter-spacing: 0px; 
font-weight: 600; 
} 

.label-tag { 
width: 100px; 
text-align: center; 
background-color: rgb(0, 177, 0); 
color: white; 
border-radius: 4px; 
}


/* Responsive CSS Here */
@media screen and (max-width: 950px) { 
.nav-img { 
	height: 25px; 
} 
.nav-option { 
	gap: 30px; 
} 
.nav-option h3 { 
	font-size: 15px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 800px; 
} 
} 

@media screen and (max-width: 850px) { 
.nav-img { 
	height: 30px; 
} 
.nav-option { 
	gap: 30px; 
} 
.nav-option h3 { 
	font-size: 20px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 700px; 
} 
.navcontainer { 
	width: 100vw; 
	position: absolute; 
	transition: all 0.6s ease-in-out; 
	top: 0; 
	left: -100vw; 
} 
.nav { 
	width: 100%; 
	position: absolute; 
} 
.navclose { 
	left: 00px; 
} 
.searchbar { 
	display: none; 
} 
.main { 
	padding: 40px 30px 30px 30px; 
} 
.searchbar2 { 
	width: 100%; 
	display: flex; 
	margin: 0 0 40px 0; 
	justify-content: center; 
} 
.searchbar2 input { 
	width: 250px; 
	height: 42px; 
	border-radius: 50px 0 0 50px; 
	background-color: var(--background-color3); 
	padding: 0 20px; 
	font-size: 15px; 
	border: 2px solid var(--secondary-color); 
} 
} 

@media screen and (max-width: 490px) { 
.message { 
	display: none; 
} 
.logosec { 
	width: 100%; 
	justify-content: space-between; 
} 
.logo { 
	font-size: 20px; 
} 
.menuicn { 
	height: 25px; 
} 
.nav-img { 
	height: 25px; 
} 
.nav-option { 
	gap: 25px; 
} 
.nav-option h3 { 
	font-size: 12px; 
} 
.nav-upper-options { 
	gap: 15px; 
} 
.recent-Articles { 
	font-size: 20px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 550px; 
} 
} 

@media screen and (max-width: 400px) { 
.recent-Articles { 
	font-size: 17px; 
} 
.view { 
	width: 60px; 
	font-size: 10px; 
	height: 27px; 
} 
.report-header { 
	height: 60px; 
	padding: 10px 10px 5px 10px; 
} 
.searchbtn img { 
	height: 20px; 
} 
} 

@media screen and (max-width: 320px) { 
.recent-Articles { 
	font-size: 12px; 
} 
.view { 
	width: 50px; 
	font-size: 8px; 
	height: 27px; 
} 
.report-header { 
	height: 60px; 
	padding: 10px 5px 5px 5px; 
} 
.t-op { 
	font-size: 12px; 
} 
.t-op-nextlvl { 
	font-size: 10px; 
} 
.report-topic-heading, 
.item1, 
.items { 
	width: 300px; 
} 
.report-body { 
	padding: 10px; 
} 
.label-tag { 
	width: 70px; 
} 
.searchbtn { 
	width: 40px; 
} 
.searchbar2 input { 
	width: 180px; 
} 
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
        <a href="/dashboard">
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
       <a href="#">
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
       <a href="#">
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
  <div class="main"> 
  
            <div class="searchbar2"> 
                <input type="text" 
                       name="" 
                       id="" 
                       placeholder="Search"> 
                <div class="searchbtn"> 
                  <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn" 
                        alt="search-button"> 
                  </div> 
            </div> 
  
            <div class="box-container"> 
  
                <div class="box box1"> 
                    <div class="text"> 
                        <h2 class="topic-heading">6M</h2> 
                        <h2 class="topic">Article Views</h2> 
                    </div> 
  
                    <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
                        alt="Views"> 
                </div> 
  
                <div class="box box2"> 
                    <div class="text"> 
                        <h2 class="topic-heading">1.5M</h2> 
                        <h2 class="topic">Likes</h2> 
                    </div> 
  
                    <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png" 
                         alt="likes"> 
                </div> 
  
                <div class="box box3"> 
                    <div class="text"> 
                        <h2 class="topic-heading">320K</h2> 
                        <h2 class="topic">Comments</h2> 
                    </div> 
  
                    <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                        alt="comments"> 
                </div> 
  
                <div class="box box4"> 
                    <div class="text"> 
                        <h2 class="topic-heading">70</h2> 
                        <h2 class="topic">Published</h2> 
                    </div> 
  
                    <img src= 
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published"> 
                </div> 
            </div> 
  
            <div class="report-container"> 
                <div class="report-header"> 
                    <h1 class="recent-Articles">Recent Articles</h1> 
                    <!-- <button class="view">View All</button>  -->
                </div> 
  
                <div class="report-body"> 
                    <div class="report-topic-heading"> 
                        <h3 class="t-op">Article</h3> 
                        <h3 class="t-op">Views</h3> 
                        <h3 class="t-op">Comments</h3> 
                        <h3 class="t-op">Status</h3> 
                    </div> 
  
                    <div class="items"> 
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 73</h3> 
                            <h3 class="t-op-nextlvl">2.9k</h3> 
                            <h3 class="t-op-nextlvl">210</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 72</h3> 
                            <h3 class="t-op-nextlvl">1.5k</h3> 
                            <h3 class="t-op-nextlvl">360</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 71</h3> 
                            <h3 class="t-op-nextlvl">1.1k</h3> 
                            <h3 class="t-op-nextlvl">150</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 70</h3> 
                            <h3 class="t-op-nextlvl">1.2k</h3> 
                            <h3 class="t-op-nextlvl">420</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 69</h3> 
                            <h3 class="t-op-nextlvl">2.6k</h3> 
                            <h3 class="t-op-nextlvl">190</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 68</h3> 
                            <h3 class="t-op-nextlvl">1.9k</h3> 
                            <h3 class="t-op-nextlvl">390</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 67</h3> 
                            <h3 class="t-op-nextlvl">1.2k</h3> 
                            <h3 class="t-op-nextlvl">580</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 66</h3> 
                            <h3 class="t-op-nextlvl">3.6k</h3> 
                            <h3 class="t-op-nextlvl">160</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                        <div class="item1"> 
                            <h3 class="t-op-nextlvl">Article 65</h3> 
                            <h3 class="t-op-nextlvl">1.3k</h3> 
                            <h3 class="t-op-nextlvl">220</h3> 
                            <h3 class="t-op-nextlvl label-tag">Published</h3> 
                        </div> 
  
                    </div> 
                </div> 
            </div> 
</div>



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

  let menuicn = document.querySelector(".menuicn"); 
let nav = document.querySelector(".navcontainer"); 

menuicn.addEventListener("click", () => { 
	nav.classList.toggle("navclose"); 
})

</script>
</body>
</html>