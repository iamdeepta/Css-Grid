<!DOCTYPE html>
 <html>
 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="stylegrid.css">

  <style type="text/css">
  	*{ margin: 0; padding: 0; }
main{
 width: 90%;
 margin: 50px auto;
 border:1px solid black;
 color: white;
 display: grid;
 grid-template-rows: repeat(2, 150px);
 grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
 /*grid-row-gap: 20px;*/
 /*grid-column-gap: 20px;*/
 grid-gap: 20px;
 grid-auto-rows: 150px;
 /*align-items: center;*/
 /*justify-content: center;*/
 /*justify-items:center; start/end/strech*/
}

.div1{ background: red; }
.div2{ background: blue;
 /*grid-column: 1/ -1;*/
 }
.div3{ background: green; }
.div4{ background: yellow; }
.div5{ background: orange;
 /*grid-row-start: 1; grid-row-end:2;*/
 /*grid-row: 1/2;*/
 /*grid-column-start: 2; grid-column-end: 4;*/
 /*grid-column: 2/4;*/

}

.div6{ background: black; }
  </style>
 </head>
 <body>

 <main>
  <div class="div1"> DONATION FOR SUPPORT:    PhonePay = vinodbahadur@ybl      GooglePay: vbthapa55@oksbi
 Believe me, all this money will be used to make more quality videos and to make my channel grow. So that I can always provide you awesome free videos :) </div>
  <div class="div2"> div2 </div>
  <div class="div3"> div3 </div>
  <div class="div4"> div4 </div>
  <div class="div5"> div5 </div>
  <div class="div6"> div6 </div>

 </main>

 </body>

 </html>