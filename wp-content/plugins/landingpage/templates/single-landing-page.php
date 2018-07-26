<?php
/**
* Template Name: Landing Page
* Template Post Type: landingpage
 */
?>
<style type="text/css">

  /*=========================================
  overide site style
  =========================================*/
  body{
    overflow-x: hidden;
  }
  header{
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
    width: 100%;
    padding: 0!important;
    display: flex!important;
    -webkit-display: flex!important;
  }
  header .flex{
    display: flex;
    -webkit-display: flex;
  }
 
  header > .flex .flex-item{
    padding: 35px 15px 0;
  }
  header .logo_wrapper{
    padding: 45px 15px!important;
  }
  header .header-btn{
    background: #cf622d;
    color: white;
    text-align: center;
    width: 120px;
  }
  header .header-btn a{
    text-decoration: none;
    color: white;
    font-family: "Helvetica Neue LT W01_77 Bd Cn";
    font-size: 15px;
    text-transform: uppercase;
  }
  header .img{
    background: #f0f1f2;
  }
  header .img img{
    display: block;
    width: 40px;
    margin: auto;
  }
  header .num{
    display: none;
  }
  footer form label{
    display: none;
  }
  footer form ul li::before{
    display: none!important;
  }
  footer form ul li:nth-child(3),
  footer form ul li:nth-child(5){
    margin-right: 0!important;
  }
  footer form ul li:last-child{
    width: 100%!important;
    float: none;
  }
  footer form li input,
  footer form li textarea{
    padding: 20px 0!important;
  }
  div[class*="location_col"]{
    width: 32%!important;
    margin-right: 1%!important;
  }
  .locations_wrapper{
    width: 100%!important;
  }
  .social_links{
    display: none!important;
  }
  .slick-slide{
    height: auto!important;
  }
  .logo_wrapper{
    width: 100%!important;
  }

  /*=========================================
  mobile
  =========================================*/
  #landinpage{
    font-family:"NewsCycle";
  }
  #landingpage #header{
    margin-top: 80px;
  }
  #landingpage #header .flex-item{
    margin-bottom: 60px;
  }
  #landingpage ul,
  #landingpage ol{
    list-style: none;
    font-family:"NewsCycle";
  }
  #landingpage ol {
    margin-left: 1.5em;
  }
  #landingpage ol li {
      counter-increment: count-me;
  }
  #landingpage ol li::before {
      content: counter(count-me) ".";
      display: block;
      position: relative;
      max-width: 0px;
      max-height: 0px;
      left: -1.5em;
      top: 0;
      color: #cf622d;
      font-weight: bold;
  }

  #landingpage ul {
      margin-left: 1.5em;
      line-height: 1.5;
      font-size: 18px;
      padding-bottom: 35px;
  }
  #landingpage ul li::before {
      content: ".";
      display: block;
      position: relative;
      max-width: 0px;
      max-height: 0px;
      left: -.6em;
      top: -.8em;
      color: #cf622d;
      font-weight: bold;
      font-size: 40px;
  }
  #landingpage ::-webkit-input-placeholder {
      text-transform: uppercase;
      font-family: "Helvetica Neue LT W01_77 Bd Cn";
      color: #cf622d;
      letter-spacing: 3px;
  }
  #landingpage ::-moz-placeholder {
      text-transform: uppercase;
      font-family: "Helvetica Neue LT W01_77 Bd Cn";
      color: #cf622d;
      letter-spacing: 3px;
  }
  #landingpage :-ms-input-placeholder {
      text-transform: uppercase;
      font-family: "Helvetica Neue LT W01_77 Bd Cn";
      color: #cf622d;
      letter-spacing: 3px;
  }
  #landingpage :-moz-placeholder {
      text-transform: uppercase;
      font-family: "Helvetica Neue LT W01_77 Bd Cn";
      color: #cf622d;
      letter-spacing: 3px;
  }
  #landingpage .right{
    display: none;
  }
  #landingpage .right form label{
    display: none;
  }
  #landingpage .right form ul{
    margin: 0;
    padding: 0;
  }
  #landingpage .right form ul li{
    border: 1px solid #4a5d69;
    margin-bottom: 17px;
  }
  #landingpage .right form ul li::before{
    display: none;
  }
  #landingpage .right form input,
  #landingpage .right form textarea{
    width: 100%;
    border: none;
    font-size: 16px;
    padding: 20px 10px;
  }
  #landingpage .right form textarea{
    height: 125px; 
  }
   #landingpage .right form input[type="submit"]{
    color: white;
    background: #cf622d;
    font-size: 16px;
    font-family: "Helvetica Neue LT W01_77 Bd Cn";
    padding: 20px 0;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  #landingpage h1{
    font-family: "Helvetica Neue LT W01_77 Bd Cn";
    font-size: 72px;
    color: #cf612d;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 3px;
  }
  #landingpage h1 em{
    font-style: inherit;
    font-size: 26px;
    display: block;
    color: white;
    letter-spacing: 8px;
  }
  #landingpage h2{
    font-family: 'Butler';
    font-size: 45px;
    position: relative;
    text-align: center;
    font-weight: normal;
    margin-bottom: 35px;
    padding-bottom: 20px;
  }
  #landingpage h2.video-title{
    font-size: 72px;
    color: #cf622d;
    font-family: "Helvetica Neue LT W01_77 Bd Cn";
    position: relative;
    text-transform: uppercase;
    margin-top: 100px;
    letter-spacing: 3px;
  }
  #landingpage h2.video-title::before{
    content: "WHY CHOOSE";
    position: absolute;
    top:-20px;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    color: #1b394a;
    font-size: 18px;
    font-family: "Butler-Medium";
    letter-spacing: 10px;
    width: 100%;
  }
  #landingpage h2.video-title::after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    width: 150px;
    height: 2px;
    background: #cf622d;
  }
  #landingpage .main-content h2::after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    width: 150px;
    height: 2px;
    background: #cf622d;
  }
  #landingpage #header{
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    position: relative;
    padding: 60px 0;
  }
  #landingpage #header p{
    line-height: 1.5;
    padding-top: 20px;
    font-family: "NewsCycle";
  }
  #landingpage #header ul{
    padding: 50px 0;
    font-family: 'Butler';
  }
  #landingpage #header strong{
    display: block;
    font-size: 14px;
    font-family: "Helvetica Neue LT W01_77 Bd Cn";
    text-transform: uppercase;
    letter-spacing: 4px;
    position: relative;
    padding-top: 20px;
    margin-top: 20px;
  }
  #landingpage #header strong::before{
    content: "";
    position: absolute;
    top:0;
    left: 0;
    width: 35px;
    height: 2px;
    background: #cf622d;
  }
  #landingpage #header .header-container{
    width: 85%;
    margin: auto;
  }
  #landingpage #header .flex span{
    float: right;
  }
  #landingpage #header .flex span img{
    width: 100px;
  }
  #landingpage #header .flex-item:nth-child(2n){
    margin-right: 0;
  }
  #landingpage #header .flex-item:last-child{
    margin-bottom: 0;
  }
  #landingpage #header .flex-item .border{
    border-bottom: 1px solid white;
    padding-bottom: 20px;
  }
  #landingpage a.btn{
    display: block;
    color: white;
    background: #cf622d;
    text-align: center;
    font-family: "Helvetica Neue LT W01_77 Bd Cn";
    font-size: 20px;
    text-transform: uppercase;
    text-decoration: none;
    padding: 30px 0;
    margin-bottom: 65px;
  }
  #landingpage .lp-content{
      width: 85%;
      margin: auto;
  }
   #landingpage .lp-content h3{
    font-size: "Butler";
    color: #cf622d;
    font-size: 25px;
    line-height: 1.5;
    border-bottom: 1px solid #ccc;
    padding-bottom: 20px;
    font-weight: normal;
    margin-bottom: 30px;
  }
  #landingpage .lp-content p{
    font-size: 18px;
    font-family:"NewsCycle";
    line-height: 1.5;
    margin-bottom: 30px;
  }
  #landingpage .lp-content strong{
    font-family: "NewsCycle-Bold";
    font-size: 18px;
    padding-bottom: 10px;
    line-height: 1.5;
  }
  #landingpage .lp-content h4{
    font-family: "NewsCycle-Bold";
    font-size: 18px;
    padding-top: 10px;
    line-height: 1.5; 
  }
  #landingpage .lp-content h5{
    color:#cf622d;
    font-family: "NewsCycle-Bold";
    font-size: 20px;
  }
  #landingpage .lp-content h5 + p{
    line-height: 1.2;
  }
  #landingpage .cta{
    background: #17303f;
    color: white;
    position: relative;
    margin: 150px 0 50px;
    padding: 125px 30px 0;
  }
  #landingpage .cta .flex{
    display: flex;
    -webkit-display: flex;
    flex-direction: column;
  }
  #landingpage .cta img{
    position: absolute;
    top: -100px;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    width: 90%;
  }
  #landingpage .cta h2{
    font-family: "Helvetica Neue LT W01_77 Bd Cn";
    font-size: 22px;
    color: #cf622d;
    text-transform: uppercase;
    letter-spacing: 5px;
    text-align: left;
    margin-bottom: 0;
  }
  #landingpage .cases{
    background: #17303f;
    color: white;
    padding: 100px 0;
    margin-left: calc(-50vw + 50%);
    margin-right: calc(-50vw + 50%);
    text-align: center;
  }
  #landingpage .cases h5{
    font-family: "Butler-Medium";
    text-transform: uppercase;
    color: white;
    letter-spacing: 4px;
    position: relative;
    font-weight: normal;
    letter-spacing: 10px;
    padding-bottom: 20px;
  }
  #landingpage .cases h5::after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    width: 150px;
    height: 2px;
    background: #cf622d;
  }
  #landingpage .cases h6{
    font-family: "Butler-Medium";
    color: white;
    font-size: 90px;
    display: block;
    font-style: none;
    font-weight: normal;
    padding-top: 65px;
  }
  #landingpage .cases h6 + p{
    margin-top: 0;
  }
  #landingpage .cases em{
    display: block;
    font-size: 18px;
    color: #cf622d;
    text-transform: uppercase;
    letter-spacing: 12px;
    font-family: "Butler-Medium";
    position: relative;
    padding-bottom: 15px;
    margin-bottom: 35px;
    font-style: inherit;
  }
  #landingpage .cases em::after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    width: 50px;
    height: 1px;
    background: white;
  }
  #landingpage .cases > .flex{
    width: 85%;
    margin: auto;
    }
  #landingpage .single_video_wrapper{
      position: relative;
      margin-bottom: 80px;
    }
  #landingpage .single_video_wrapper::after{
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #f0f1f2;
    left: 20px;
    top: 20px;
    z-index: -1;
  }
  #landingpage .play-btn {
      width: 100px;
      height: 100px;
      background: radial-gradient( rgba(0,0,0, 0.8) 65%, rgba(255, 255, 255, 1) 62%);
      border-radius: 50%;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%)translateY(-50%);
      -webkit-transform: translateX(-50%)translateY(-50%);
      pointer-events: none;
    }

    /* triangle */
  #landingpage .play-btn::after {
      content: "";
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translateX(-40%) translateY(-50%);
      transform: translateX(-40%) translateY(-50%);
      transform-origin: center center;
      width: 0;
      height: 0;
      border-top: 15px solid transparent;
      border-bottom: 15px solid transparent;
      border-left: 25px solid #cf612d;
      z-index: 100;
      -webkit-transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
      transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

  #landingpage .video-section h3,
  #landingpage .video-section p{
    line-height: 1.25;
  }
  #landingpage .video-section h3{
    font-family: "NewsCycle-Bold";
    font-size: 18px;
    border-bottom: none;
    padding-bottom: 0;
  }
  #landingpage .attorney{
    background: #cf622d;
    color: white;
    margin-left: calc(-50vw + 50%);
    margin-right: calc(-50vw + 50%);
    padding: 80px 0 50px;
  }
  #landingpage .attorney h2{
    color: white;
    position: relative;
    font-size: 50px;
  }
  #landingpage .attorney h2::before{
    content: "MEET LEAD ATTORNEY";
    position: absolute;
    top:-25px;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    font-size: 16px;
    color:#17303f;
    font-family: "Butler-Medium";
    width: 100%;
    letter-spacing: 8px;
  }
  #landingpage .attorney.david h2::before{
    content: "MEET ATTORNEY";
  }
  #landingpage .attorney h2::after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    width: 100%;
    height: 2px;
    background: #fff;
  }
  #landingpage .attorney img{
    width: 80%;
    display: block;
    margin: auto;
  }
  #landingpage .attorney p{
    margin-top: 30px;
  }
  #landingpage .attorney-container{
    width: 85%;
    margin: auto;
  }

  /*=========================================
  Tablet
  =========================================*/
  @media (min-width: 750px){
    header .num{
      display: block;
      padding-top: 35px!important;
    }
   header .num .desktop-num{
      display: none;
   }
    header .num span{
      display: none;
    }
    header .num a{
      color: #cf622d;
      font-size: 37px;
      font-family: "Butler-Medium";
      text-decoration: none;
    }
    header .num p{
      font-family: "Helvetica Neue LT W01_77 Bd Cn";
      text-transform: uppercase;
      text-align: right;
      letter-spacing: 3px;
      padding-bottom: 5px;
    }
    header .img{
      display: none;
    }
    header .header-btn{
      width: 185px;
    }
    header .header-btn a{
      font-size: 16px;
      letter-spacing: 1px;
      width: 80%;
      display: block;
      margin: auto;
    }
    
    header > .flex .flex-item{
      padding-top: 45px;
    }
    #landingpage #header{
      padding: 90px 0;
       margin-top: 107px;
    }
    #landingpage h1{
      font-size: 76px;
      letter-spacing: 7px;
    }
    #landingpage h1 em{
      font-style: inherit;
      font-size: 32px;
      letter-spacing: 20px;
    }
    #landingpage h2{
      font-size: 65px;
      padding: 0 40px 20px;
    }
    #landingpage h2.video-title{
      margin-top: 140px;
    }
    #landingpage h2.video-title::before{
      letter-spacing: 20px;
    }
    #landingpage .cta{
      padding:40px 15px;
    }
    #landingpage .cta .flex{
      flex-direction: row;
      -webkit-flex-direction: row;
    }
    #landingpage .cta img{
      width: 325px;
      position: relative;
      top: 0;
      left: -35px;
      transform: translateX(0);
      -webkit-transform: translateX(0);
    }
    #landingpage .cases{
      padding: 130px 0;
    }
    #landingpage .cases h5{
      letter-spacing: 15px;
      margin-bottom: 35px;
    }
    #landingpage .attorney{
      margin-top: 90px;
      padding: 140px 0 130px;
    }
    #landingpage .attorney h2{
      font-size: 76px;
    }
    #landingpage .attorney h2::before{
      letter-spacing: 10px;
    }
    #landingpage .attorney .flex{
      display: flex;
      -webkit-display: flex;
    }
    #landingpage .attorney .flex-item{
      width: 50%;
    }
    #landingpage .attorney p{
      margin: 0;
    }
    footer form ul li:nth-child(4),
    footer form ul li:nth-child(5){
      width: 49%!important;
    }
  }


  /*=========================================
  Laptop
  =========================================*/
  @media (min-width: 1400px){
    header .num{
      display: flex;
      -webkit-display: flex;
    }
   header .num .desktop-num{
      display: block;
      width: 275px;
   }
   header .num .mobile-num{
    display: none;
   }
    header .num a{
      font-family: "Helvetica Neue LT W01_77 Bd Cn";
    }
    header .num p{
      width: 300px;
      padding-right: 20px;
    }
    header .num span{
      display: block;
    }
    header .header-btn{
      display: none;
    }
    #landingpage{
      display: flex;
      -webkit-display: flex;
    }
    #landingpage #header .flex-item{
      width: 48%;
      margin-right: 4%;
    }
    #landingpage h1{
      text-align: left;
      font-size: 96px;
    }
    #landingpage h1 em{
      font-style: inherit;
      font-size: 38px;
    }
    #landingpage h2{
      text-align: left;
      margin-bottom: 30px;
      padding:0;
    }
    #landingpage ul{
      padding-bottom: 75px;
    }
    #landingpage .main-content h2{
      background: white;
    }
    #landingpage .main-content h2::after{
      left: -52%;
      top: 30px;
      width: 100%;
      z-index: -1;
    }
    #landingpage h2.video-title{
      font-size: 100px;
      padding-left: 150px;
      margin-top: 185px;
      margin-bottom: 80px;
    }
    #landingpage h2.video-title::after{
      left:0;
      top: 50%;
      width: 250px;
    }
    #landingpage h2.video-title::before{
      font-size: 24px;
      padding-left: 120px;
      letter-spacing: 35px;
    }
    #landingpage .single_video_wrapper{
      width: 685px;
    }
    #landingpage #header ul{
      font-size: 26px;
    }
    #landingpage #header p{
      font-size: 18px;
    }
    #landingpage #header .header-container{
      width: 73%;
    }
    #landingpage #header .flex{
      display: flex;
      -webkit-display: flex;
    }
    #landingpage a.btn{
      display: none;
    }
    #landingpage .lp-content{
      padding: 70px 0 0;
      width: 100%;
      margin: auto;
    }
    #landingpage .lp-content .wrapper{
      max-width: 750px;
      width: 100%;
      margin: auto;
    }
    header, #landingpage .left{
      width: calc(100% - 340px);
    }
    #landingpage .left .container{
      width: 90%;
      margin: auto;
    }
    #landingpage .right{
      display: block;
      width: 347px;
      background: #f0f1f2;
      position: fixed;
      right: 0;
      top: 0;
      z-index: 9999;
      padding-top: 170px;
      height: 100%;
      overflow-y: scroll;
      padding-bottom: 50px;
    }
    /* hide scrollbar */
    #landingpage .right::-webkit-scrollbar {
      display: none;
    }
    #landingpage .right .container{
      width: 85%;
      margin: auto;
    }
    #landingpage .right h2{
      color: #c05b2a;
      font-size: 14px;
      font-family: "Butler-Medium";
      text-transform: uppercase;
      letter-spacing: 5px;
      margin-bottom: 0;
    }
    #landingpage .right h3{
      color: #17303f;
      font-size: 63px;
      font-family: "Butler";
      font-weight: normal;
      text-transform: lowercase;
    }
    #landingpage .right small{
      font-family: "Butler-Light";
      font-size: 14px;
      color: #c05b2a;
      display: block;
      margin-top: 12px;
      margin-bottom: 28px;
    }
    #landingpage .right p{
      color: #0c3f59;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 4px;
      font-family: "Helvetica Neue LT W01_77 Bd Cn";
      text-align: center;
      margin: 20px 0 5px;
      line-height: 1.2;
      opacity: 0;
    }
    #landingpage .right strong{
      font-size: 36px;
      color: #cf622d;
      font-family: "Helvetica Neue LT W01_77 Bd Cn";
      display: block;
      text-align: center;
    }
    #landingpage .right form ul li:nth-child(2),
    #landingpage .right form ul li:nth-child(3){
      width: 48%;
      float: left;
      margin-right: 4%;
    }
    #landingpage .right form ul li:nth-child(3){
      margin-right: 0;
    }
    #landingpage .right form ul li:nth-child(3n+1){
      clear: left;
    }

    #landingpage .right form .gform_footer.top_label{
      position: relative;
    }
    #landingpage .right form .gform_footer.top_label::after{
      content: "";
      position: absolute;
      top:50%;
      left: 20px;
      transform: translateY(-50%);
      -webkit-transform: translateY(-50%);
      width: 22px;
      height: 22px;
      background: url('/wp-content/plugins/landingpage/images/icon-lock.svg') no-repeat center center;
    }

    #landingpage .left .container{
      width: 75%;
      margin: auto;
    }
    #landingpage .cta{
      margin: 125px 0 60px 95px;
    }
    #landingpage .cta p{
      line-height: 2;
    }
    #landingpage .cta img{
      left: -70px;
      top: -70px;
      transform: scale(1.25);
      -webkit-transform: scale(1.25);
    }
    #landingpage .cases{
      padding-bottom: 150px;
      margin-left: calc(0vw + 0%);
      margin-right: calc(0vw + 0%);
      margin-top: 70px;
    }
    #landingpage .cases em{
      margin-bottom: 65px;
    }
    #landingpage .cases em::after{
      width: 1px;
      height: 50px;
      bottom: -75px;
    }
    #landingpage .cases p{
      margin-top: 28px;
      padding: 0 35px;
    }
    #landingpage .cases h5{
      text-align: left;
      padding-left: 165px;
    }
    #landingpage .cases h5::after{
      left: 0;
      top: 6px;
      width: 280px;
    }
    #landingpage .cases h6{
      padding-top: 85px;
    }
    #landingpage .cases > .flex{
      display: flex;
      -webkit-display: flex;
    }
    #landingpage .cases .flex-item:nth-child(1){
      border-right: 1px solid white;
    }
    #landingpage .attorney{
      margin-left: calc(0vw + 0%);
      margin-right: calc(0vw + 0%);
      position: relative;
      margin-top: 190px;
    }
    #landing .attorney .container{
      max-width: 850px;
      width: 100%;
    }
    #landingpage .attorney h2{
      text-align: right;
    }
    #landingpage .attorney h2::after{
      top: -20px;
      left: 100%;
      background: #17303f;
      z-index: 1;
    }
    #landingpage .attorney h2::before{
      background: #cf622d;
       z-index: 2;
    }
    #landingpage .attorney img{
      width: 435px;
      position: absolute;
      left: 0;
      top: -100px;
      z-index: 3;
    }
  }

  /*=========================================
  Desktop
  =========================================*/
  @media (min-width: 1920px){
    #landingpage h1{
      font-size: 140px;
    }
    #landingpage h1 em{
      font-style: inherit;
      font-size: 55px;
    }
    #landingpage #header .header-container{
      width: 80%;
    }
    #landingpage .lp-content .wrapper{
      max-width: 850px;
    }
    #landingpage .cases h5{
      padding-left: 280px;
    }
    #landingpage .cases h5::after{
      width: 480px;
    }
    #landingpage h2.video-title{
      padding-left: 270px;
    }
    #landingpage h2.video-title::before{
      padding-left: 200px;
    }
    #landingpage h2.video-title::after{
      width: 470px;
    }
    #landingpage .attorney{
      padding-bottom: 230px;
    }
    #landing .attorney .container{
      max-width: 1220px;
    }
    #landingpage .attorney h2{
      font-size: 81px;
    }
    #landingpage .attorney h2::after{
      width: 100%;
    }
    #landingpage .attorney p{
      padding-left: 88px;
    }
    #landingpage .attorney img{
      width: 535px;
    }
    header,#landingpage .left{
      width: calc(100% - 470px);
    }
    #landingpage .right{
      width: 470px;
      overflow: visible;
    }
    #landingpage .right .container{
      width: 75%;
    }
    #landingpage .right h3{
      font-size: 77px;
      position: relative;
    }
    #landingpage .right h3::after{
      content: "";
      position: absolute;
      top: 30px;
      left: -95px;
      width: 65px;
      height: 2px;
      background: #cf622d;
    }
    #landingpage .right p{
      opacity: 1;
    }

  }

  @media (min-width: 2400px){
    #landingpage .attorney-container{
      max-width: 1920px;
      width: 79%;
      padding: 0 135px;
      margin: 0;
    }
    header{
      max-width: 1920px;
      width: calc(100% - 0px);
      padding-left: 135px!important;
    }
    #landingpage .left{
      width: calc(100% - 0px);
    }
    .right{
      left: 1920px;
    }
    #landingpage .lp-content .wrapper,
    #landingpage .cases > .flex,
    #landingpage #header .header-container{
      max-width: 1920px;
      width: 79%;
      padding: 0 135px;
      margin: 0;
    }
    #landingpage .attorney img{
      left: 135px;
    }
    .footer_container{
      max-width: 1820px;
      width: 100%;
    }
    #free_consultation{
      max-width: 1920px;
      width: 100%;
    }

  }

  
</style>
  

  <section id="landingpage">


      <!-- left -->
      <div class="left">



          <!-- header -->
          <?php include( plugin_dir_path( __FILE__ ) . '/header.php' ); ?>
      

          <!-- header -->
          <div id="header" style="background: url(<?php the_field('banner_image') ?>) no-repeat center center; background-size: cover; ">
            <div class="header-container">
              <?php the_field('banner_text_1'); ?>
              <div class="flex">
                <div class="flex-item">
                  <div class="border">
                      <svg height="25" width="23" class="star rating" data-rating="1">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <svg height="25" width="23" class="star rating" data-rating="2">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <svg height="25" width="23" class="star rating" data-rating="3">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <svg height="25" width="23" class="star rating" data-rating="4">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <svg height="25" width="23" class="star rating" data-rating="5">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <span><img src="/wp-content/plugins/landingpage/images/facebook.svg"></span>
                  </div>
                   <?php the_field('banner_text_2'); ?>
                </div>
                <div class="flex-item">
                  <div class="border">
                      <svg height="25" width="23" class="star rating" data-rating="1">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <svg height="25" width="23" class="star rating" data-rating="2">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <svg height="25" width="23" class="star rating" data-rating="3">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <svg height="25" width="23" class="star rating" data-rating="4">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <svg height="25" width="23" class="star rating" data-rating="5">
                        <polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" fill="#fff"/>
                      </svg>
                      <span><img src="/wp-content/plugins/landingpage/images/avvo.svg"></span>
                  </div>
                   <?php the_field('banner_text_3'); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- /header -->





          <!-- button -->
          <a href="#free_consultation" class="btn">Begin Free Case Consultation</a>


          <!-- content -->
          <div class="lp-content">






            <div class="wrapper">
              <div class="main-content">
                <?php the_field('main_content'); ?>
              </div>



              <!-- cta -->
              <div class="cta">
                <div class="flex">
                  <div class="flex-item">
                    <img src="<?php the_field('cta_img'); ?>">
                  </div>
                  <div class="flex-item">
                    <h2><?php the_field('cta_title'); ?></h2>
                    <?php the_field('cta_content'); ?>
                  </div>
                </div>
              </div>


              <!-- secondary content -->
              <?php the_field('secondary_content'); ?>
            </div>





          <!-- cases -->
          <section class="cases">
            <h5>Featured Cases</h5>
            <div class="flex">
              <div class="flex-item">
                 <?php the_field('featured_case_1'); ?>
                
              </div>
              <div class="flex-item">
                <?php the_field('featured_case_2'); ?>
              </div>
            </div>
          </section>





          <!-- video section -->
          <div class="video-section">
              <h2 class="video-title">Anapol Weiss</h2>


              <!-- wrapper -->
              <div class="wrapper">

                <!-- video -->
                <div class="single_video_wrapper">
                  <script src="//fast.wistia.com/embed/medias/<?php the_field('video_id');?>.jsonp" async=""></script><script src="//fast.wistia.com/assets/external/E-v1.js" async=""></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_<?php the_field('video_id');?> popover=true popoverAnimateThumbnail=true videoFoam=true wistia_embed_initialized" style="display:inline-block;height:100%;width:100%" id="wistia-<?php the_field('video_id');?>-1"><div id="wistia_428.thumb_container" class="wistia_click_to_play" style="position: relative; height: 252.359px; width: 448.656px;"><div id="wistia_664.thumbnail" tabindex="0" style="cursor: pointer; display: block; height: 252.344px; overflow: hidden; outline: none; position: relative; width: 448.641px;"><img id="wistia_664.thumbnail_img" alt="Wistia video thumbnail" src="https://embedwistia-a.akamaihd.net/deliveries/1ab1e392fb065b6b0963367ab34c3171698e9bd0.jpg?image_crop_resized=960x540" style="border: 0px; display: block; float: none; height: 252.344px; margin: 0px; max-height: none; max-width: none; padding: 0px; position: absolute; width: 448.641px; left: 0px; top: 0px;"></div></div></span></div></div> 
                    <a class="play-btn" href="#"></a>
                </div>
                <!-- /video -->
            



                <!-- video content -->
                <?php the_field('video_content'); ?>


              </div>
              <!-- /wrapper -->

          </div>
          <!-- /video section -->





          <div class="attorney">
            <div class="attorney-container">
              <h2><?php the_field('attorney_name'); ?></h2>
              <div class="flex">
                <div class="flex-item">
                  <img src="<?php the_field('attorney_photo'); ?>">
                </div>
                <div class="flex-item">
                   <?php the_field('attorney_content'); ?>
                </div>
              </div>
              
            </div>
          </div>





          <div class="attorney david">
            <div class="attorney-container">
              <h2><?php the_field('attorney_name_2'); ?></h2>
              <div class="flex">
                <div class="flex-item">
                  <img src="<?php the_field('attorney_photo_2'); ?>">
                </div>
                <div class="flex-item">
                   <?php the_field('attorney_content_2'); ?>
                </div>
              </div>
              
            </div>
          </div>


        </div>
        <!-- /content -->



        <!-- footer -->
        <?php include( plugin_dir_path( __FILE__ ) . '/footer.php' ); ?>

      </div>
      <!-- /left -->




      <!-- right -->
      <div class="right">
        <div class="container">
          <h2>Free case evaluation</h2>
          <h3>Get started today</h3>
          <small>*information required</small>
          <?php gravity_form( 3, false, false, false, '', false ); ?>
          <p class="info">For immediate assistance, call us today.</p>
          <strong>1 (866) 735-2792</strong>
        </div>
      </div>
      <!-- /right -->


  </section>

