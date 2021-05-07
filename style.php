<style type="text/css">

html{
    scroll-behavior: smooth;
}
*{margin: 0;padding: 0;box-sizing: border-box; font-family: 'Muli',sans-serif;}

.nav_style {
    background-color: #a29bfe!important;
}
.nav_style a{
    color: white;
}
body{
    /* background: #000; */
    
}
/*//////////main hader /////////*/

.main_header{
    height: 450px;
    width: 100%;
}
.rightside h1{
    font-size: 3rem;
}

#lets{
    top: 63px
}

.leftside img{
    animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat 
{
    0%{
        transform:scale( .75);
    }
    
    20%{
        transform:scale( 1); 
    }
    40%{
        transform:scale( .75); 
    }
    60%{
        transform:scale( 1); 
    }
    80%{
        transform:scale( .75); 
    }
    100%{
        transform:scale( .75); 
    }
}

.corona_apdate{
     margin: 0 0 30px 0;
}
.corona_update h3{
    color: #ff7675;
}
.corona_update h1{ font-size: 2rem; text-align: center;}


.sub_sections{
    background-color: #fbfafd;
}
/*/////////////// footer ///////////////*/

.footer_style{
    background-color: #a29bfe! important;
    margin-bottom: 5!important;
}

.footer_style p{
margin-bottom: 5!important;
}

/*////////////// scroll Top ////////////*/

#myBtn {

    display: none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #00A8FF;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}

#myBtn:hover{
    background: #606060;
}

#tr00, #tr01{
    background:  #ff1a8c;
}
#trI{
     /* background: #4d79ff; */
     background: 	#4dffff;
}
#trW{
    /* background: #33ff33; */
     background: #8cff66;
}



 #header0, #header1{
    position: relative;
    font-size: 3em;
    font-weight: 900;
    z-index:1;
    overflow:hidden;
}
#header1:before{
    content: '';
    position:absolute;
    left:110%;
    width:120%;
    top:15%;
    height: 50%;
    background: linear-gradient(90deg, transparent 0%, #fff 5%, #fff 100%);
    animation: animate 5.5s linear forwards;
    animation-delay:2s;
}
@keyframes animate {
    0%{
        left: 120%;
    }
    100%{
        left: -20%;
    }
    
}
#header1 span{
    color: #ff022c;
}
@media only screen and (max-width: 600px){
    #main_img{
        display: none ;
        
    }
}

@media only screen and (max-width: 992px){
    #header0, #header1{
    position: relative;
    font-size: 2em;
    font-weight: 700;
    z-index:1;
    overflow:hidden;
    }
    #header1:before{
    content: '';
    position:absolute;
    left:0%;
    width:0%;
    top:20%;
    height: 50%;
    /* background: linear-gradient(90deg, transparent 0%, #fff 5%, #fff 100%); */
    animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat 
{
    0%{
        transform:scale( .75);
    }
    
    20%{
        transform:scale( 1); 
    }
    40%{
        transform:scale( .75); 
    }
    60%{
        transform:scale( 1); 
    }
    80%{
        transform:scale( .75); 
    }
    100%{
        transform:scale( .75); 
    }
}
@media only screen and (max-width: 900px){
    #aboutcoronaImg{
        margin-left: 40px
    }
}


</style>