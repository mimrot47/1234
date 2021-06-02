<?php 
include_once "session.php";
include "connect.php";
include_once 'dbconfig.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
<title>MATRIMONY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<link href="responcive.css" rel="stylesheet" type="text/css">
<style>
@font-face {
	font-family: CenturyGothict;
	src: url(fonts/CenturyGothic.ttf);
}
@font-face {
	font-family: CaviarDreams_Bold;
	src: url(fonts/CaviarDreams_Bold.ttf);
}
@font-face {
	font-family: CaviarDreams;
	src: url(fonts/CaviarDreams.ttf);
}
@font-face {
	font-family: BerlinSans;
	src: url(fonts/BRLNSR.ttf);
}

li.selected a { color: #FF0000; }
#image_list
{
  width:180px;
  height:150px;
  
  margin-left:10px;
  margin-right:10px;
}

#img-success
{
  height:300px;
}

</style>
<!---->


<script src="jquery-1.11.1.min.js"></script>

<script>
$(document).ready(function(e) {
    $('.menu-btn').click(function(e) {
        $('ul').slideToggle(500);
    });
});
</script>
<script src="jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function(e) {
    $('.menu-btn').click(function(e) {
        $('ul').slideToggle(500);
    });
});
</script>
<!-->
       <script type="text/javascript" src="jquery-1.4.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{

  $("#loding2").hide();
  
  
  $("#state").change(function()
  {
    $("#loding2").show();
    var id=$(this).val();
    var dataString = 'id='+ id;
  
    $.ajax
    ({
      type: "POST",
      url: "get_city.php",
      data: dataString,
      cache: false,
      success: function(html)
      {
        $("#loding2").hide();
        $("#city").html(html);
      } 
    });
  });

});

$(document).ready(function()
{
  $("#gender").change(function()
  {
    $("#loding2").show();
    var id=$(this).val();
    var dataString = 'id='+ id;
  
    $.ajax
    ({
      type: "POST",
      url: "get_marriage.php",
      data: dataString,
      cache: false,
      success: function(html)
      {
        $("#loding2").hide();
        $("#marriageType").html(html);
      } 
    });
  });
});


</script>

</head>
<body>
  <header >
  <div style="background-color:#225169; height:50px">&nbsp;</div>
  <div class="container">
    <nav class="navbar navbar-default" role="navigation"> 
      <div class="navbar-header">
        <h1 class="navbar-brand" style="font-family:CenturyGothict; font-size:28px"><a href="index.php"><span style="color:#FF4500">MALI</span> <span style="color:#225169">MATRIMONY</span></a></h1>
        <a href="#" class="submenu" style="background-image:url(img/default-logo.png); width:40px; height:40px">Menus</a> </div>
      <div class="menuBar">
        <ul class="menu">
        
          <li><a href="index.php">Home</a></li>
		  <li><a href="http://localhost/malimatrimony.org/index.php#search">SEARCH</a></li>
          <li><a href="http://localhost/malimatrimony.org/index.php#bride">BRIDE</a></li>
          <li><a href="http://localhost/malimatrimony.org/index.php#groom">GROOM</a></li>
          <li><a href="http://localhost/malimatrimony.org/index.php#success">SUCCESS STORIES</a></li>          
          <li class="activet"><a href="terms.php">TERMS AND CONDITIONS</a></li>
          <li><a href="http://localhost/malimatrimony.org/index.php#contact">Contact Us</a></li>          
        </ul>
        
      </div>
      
    </nav>
  </div>
</header>


      <style>
      h3{
       
       font-size: 25px; 
     color:#214F92;
      }
      h5{
        
        font-size: 25px;
        text-align: center;
      height: 60px;
      padding-top: 23px;
       color: #fff;
      background-color: #214F92;
      }
    @media only screen and (max-width:900px)
    {
      h2
      {
        
        text-decoration:underline;
        
      }
      .text
      {
        
        text-decoration:underline;
      }
      
      p
      {
        line-height:20px;
      }
    }
    @media only screen and (max-width:500px)
    {
      h2
      {
        
        text-decoration:underline;
        display:none;
      }
      
      p
      {
        line-height:30px;
      }
      .abc{
        display:block;
        
      }
      

    }
 </style>
<div class="container">
  <div class="row" >
    <div class="col" style="margin-top: 100px; padding-left:4%;padding-right:4%; ">
      <div style="border:solid darkgray">
 <h5 style="margin-top:0px">TERMS AND CONDITIONS</h5>
 <div style="padding:5px; margin-top:0px;color:black">
 <h3><u><b>DISCLAIMER</b></u>:</h3>
 <ol style="font-size:18px">
 <li>It must be clearly understood that each profile you find in this website is the resultant consequence of a process and procedure, which is expected to be adhered by our clients with due diligence.</li>
 <li><b>malimatrimony.org</b> does not engage in any matchmaking whatsoever, <b>malimatrimony.org</b> cannot be held responsible in any way for the character and integrity of a person whose profile is found on this site.</li>
 <li> <b>malimatrimony.org</b> makes no representations regarding the accuracy or significance of any detail of a person found on this website, and cannot be responsible for any abuse that may be done by any third party therewith.</li>
 <li><b>malimatrimony.org</b> is in no way responsible for the disputes which arise out of the issues of marriage(s) from either party. he responsibility lies on the interested parties to do the background check of the probable Bride or Bridegroom to be in advance before entering into any nuptial confirmations. Particularly, the financial issues of any sort. </li>
 <li>He/she is responsible for his/her Information and details which is provide by his/her for the purpose of this site. Also responsible for sending information through this site.</li>
 <li>We have full rights to modify/update his/her profile/contact details, if require.</li>
 </ol>
 <h3><u>FEES</u>:</h3>
 <ol style="font-size:18px">
 <li>Registration fees will be 2100/- Rs. for 3 years Per candidate.
</li>
<li>Membership fee is not refundable in any case.</li>
<li>Membership Fees are only for use this site and its services for him/her personal use, its non-transferable to other.</li>
</ol>
<h3><u>DELIVERY POLICY:</u></h3>
<ol style="font-size:18px">
<li>All services are delivered online. No shipping charges apply.</li>
</ol>
<h3><u>PRIVACY POLICY  </u></h3>
<p style="font-size:18px"><b>Information Security:</b></p>
<ol style="font-size:18px">
<li>We take appropriate security measures to protect against unauthorized access to or unauthorized alteration, disclosure or destruction of data. These include internal reviews of our data collection, storage and processing practices and security measures, including appropriate encryption and physical security measures to guard against unauthorized access to systems where we store personal data.
<b>malimatrimony.org</b> does not engage in any matchmaking whatsoever,<b> malimatrimony.org</b> cannot be held responsible in any way for the character and integrity of a person whose profile is found on this site.
</li>
<li>All information gathered is securely stored within the controlled database. The database is stored on servers secured behind a firewall; access to the servers is password-protected and is strictly limited. However, as effective as our security measures are, no security system is impenetrable. We cannot guarantee the security of our database, nor can we guarantee that information you supply will not be intercepted while being transmitted to us over the Internet. And, of course, any information you include in a posting to the discussion areas is available to anyone with Internet access.
</li>
<li>However, the internet is an ever evolving medium. We may change our privacy policy from time to time to incorporate necessary future changes. Of course, our use of any information we gather will always be consistent with the policy under which the information was collected, regardless of what the new policy may be.
</li>
</ol>
<h3><u>OTHER TERMS AND CONDITIONS:</u></h3>
<p style="font-size:18px">Welcome to <b><b>malimatrimony.org</b>,</b> your personal matchmaking advertiser. <b>malimatrimony.org</b> is an advertising platform providing targeted advertising services for matchmaking. <b>malimatrimony.org</b> helps you promote and advertise your profile to the prospective alliance partner to drive an 'Accept', the first step in seeking a life-partner. Access to the <b>malimatrimony.org</b> website is not free. However, we offer Memberships wherein one can promote his/her Profile on various <b>malimatrimony.org</b> properties.</p>
<ol style="font-size:18px">
<li><b><u>Eligibility:</u></b><br>To register as a member of <b>malimatrimony.org</b> or use this Site, you must be legally competent and of legal marriageable age as per the laws of India (currently, 18 years or over for females and 21 years or over for males). The <b>malimatrimony.org</b> site is only to facilitate personal advertisement for lawful marriage alliance between persons who are legally competent to enter into matrimony under the laws to which they are subject. Membership in the Service is void where prohibited. By using this Site, you represent and warrant that you have the right, consent, authority, and legal capacity to enter into this Agreement and that you are not prohibited or prevented by any applicable law for the time being in force or any order or decree or injunction from any court, tribunal or any such competent authority restraining you from entering into matrimony. You further confirm that your intent to seek a life partner and that you shall not use this site for casual dating. You also agree to abide by all of the terms and conditions of this Agreement. If at any time <b>malimatrimony.org</b> is of the opinion (in its sole discretion) or has any reason to believe that you are not eligible to become a member or that you have made any misrepresentation, <b>malimatrimony.org</b> reserves the right to forthwith terminate your membership and / or your right to use the Service without any refund to you of any of your unutilized subscription fee.</li><br>

<li><b><u>Non-Commercial Use by Members:</u></b><br>The Site is for the personal use of individual members to advertise and promote their profiles for the purpose of generating Accepts from relevant matches and cannot be used in connection with any commercial endeavours. Site. Illegal and/or unauthorized uses of the Site, including unauthorized framing of or linking to the Site will be investigated, and appropriate legal action will be taken, including without limitation, civil, criminal, and injunctive redress.</li><br>
<li><b><u>Other Terms of Use by Members:</u></b></li>
<ol style="font-size:18px">
<li><b>malimatrimony.org</b> reserves the right in its sole discretion to review the activity & status of each account & block the account of a member based on such review.
</li>
<li>You hereby confirm that as on date of this registration, you do not have any objection to receive emails, messages and calls from <b>malimatrimony.org</b> and members of <b>malimatrimony.org</b> as long as you are a registered member of <b>malimatrimony.org</b>. This consent shall supersede any preferences set by you with or registration done with the Do Not Disturb (DND Register)/ National Customer Preference Register (NCPR). This consent extends to emails, messages or calls relating but not limited to phone number verification, the provision of matchmaking advertising service, matchmaking enquiries and promotions.
</li>
<li>Multiple profiles of the same person are not allowed on <b>malimatrimony.org</b>. <b>malimatrimony.org</b> reserves the right to deactivate all multiple profiles without any refund of subscription fees.
</li>
<li>You confirm that the Content, information including the personal information provided by you is correct and accurate.
</li>
<li>You are strongly advised to submit copy of your Driving License, Passport or any other Government issued identity and add a trust badge to your profile.
</li>
<li>Except for the purpose of promoting/advertising your profile for matchmaking purposes, you cannot engage in advertising to, or solicitation of, other Members to buy or sell any products or services through the Service. You will not transmit any chain letters or junk email to other <b>malimatrimony.org</b> Members. Although <b>malimatrimony.org</b> cannot monitor the conduct of its Members off the <b>malimatrimony.org</b> Site, it is also a violation of these rules to use any information obtained from other members in order to harass, abuse, or harm another person, or in order to contact, advertise to, solicit, or sell to any Member without their prior explicit consent.
</li>

<li><b>malimatrimony.org</b> reserves the right to take appropriate steps as it deems appropriate in its sole discretion in order to protect <b>malimatrimony.org</b> and/or its Members from any abuse / misuse.
</li>
<li>You cannot use any automated processes, including IRC Bots, EXE's, CGI or any other programs/scripts to view content on or communicate / contact / respond / interact with <b>malimatrimony.org</b> and/or its members.
</li>
<li><b>malimatrimony.org</b> reserves the right to screen communications/advertisements that you may send to other Member(s) and also regulate the same by deleting unwarranted/obscene communications/advertisements at any time at its sole discretion without prior notice to any Member</li>
<li><b>malimatrimony.org</b> Members are expected to exercise simple precautions for their privacy and safety. A suggestive guideline of such precautions is enlisted under Security Tips. By becoming a Member you hereby agree to abide and adhere to the said Tips</li>
<li><b>malimatrimony.org</b> Members who subscribe to the <b>malimatrimony.org</b> Select Service hereby, unconditionally and irrevocably confirm that you have read terms and conditions and agree to abide by them.
</li>
</ol><br>

<li><b><u>Proprietary Rights in the Content on <b>malimatrimony.org</b>:</u></b><br><b>malimatrimony.org</b> owns and retains all proprietary rights in the <b>malimatrimony.org</b> Site and the <b>malimatrimony.org</b> Service. The Site contains the copyrighted material, trademarks, and other proprietary information of <b>malimatrimony.org</b>, and its licensors. Except for that information which is in the public domain such as member profile or for which permission has been obtained from the user, you cannot copy, modify, publish, transmit, distribute, perform, display, or sell any such proprietary information. Any such act or an attempted act on your part shall constitute a violation of this Agreement and your membership is liable to be terminated forthwith by <b>malimatrimony.org</b> without refund of any of your unused Subscription fees. <b>malimatrimony.org</b> reserves right to take legal action (civil and/or criminal) wherever applicable for any violations.
</li><br>
<li><b><u>Content Posted on the Site:</u>
</b></li>
<ol style="font-size:18px">
<li>You understand and agree that <b>malimatrimony.org</b> may delete any listing, content, communication, photos or profiles (collectively, "Content") that in the sole judgment of <b>malimatrimony.org</b> violate this Agreement or which might be offensive, illegal, or that might violate the rights, harm, or threaten the safety of either <b>malimatrimony.org</b> and/or its Members.
</li>
<li>With respect to Content you submit or make available for inclusion on publicly accessible areas of the Site including but not limited to your contact details, you hereby unconditionally and irrevocably grant to <b>malimatrimony.org</b> the license to use, distribute, reproduce, modify, adapt, publicly perform and publicly display such Content on the Site and to Shaadi Centre members from time to time.
</li>
<li>You shall use the Services only to market and promote your profile and to reach out to other Members for the purpose of driving an 'Accept' from relevant matches. You understand and hereby agree that all information, data, text, photographs, graphics, communications, tags, or other Content whether publicly posted or privately transmitted or otherwise made available to <b>malimatrimony.org</b> or Shaadi Centre members, are the sole responsibility of the person from whom such Content originated and shall be at the member's/person's sole risks and consequences. This means that you (and not <b>malimatrimony.org</b>) are solely responsible for all Content that you upload, post, email, transmit or otherwise make available via the Service. <b>malimatrimony.org</b> does not control the Content posted via the Service and, as such, does not guarantee the accuracy, integrity or quality of such Content. Under no circumstances will <b>malimatrimony.org</b> be liable in any way for any Content, including, but not limited to, any errors or omissions in any Content, or any loss or damage of any kind incurred as a result of the use of any Content posted, emailed, transmitted or otherwise made available via the Service. <b>malimatrimony.org</b> reserves the right to verify the authenticity of Content posted on the Site. In exercising this right, <b>malimatrimony.org</b> may ask you to provide any documentary or other form of evidence supporting the Content you post on the Site. If you fail to produce such evidence to the satisfaction of <b>malimatrimony.org</b>, <b>malimatrimony.org</b> may, in its sole discretion, terminate your Membership without a refund.
</li>
<li>By posting Content/ advertising to any public area of <b>malimatrimony.org</b>, you automatically grant, and you represent and warrant that you have the right to grant, to <b>malimatrimony.org</b>, and other <b>malimatrimony.org</b> Members, an irrevocable, perpetual, non-exclusive, fully-paid, worldwide license to use, copy, perform, display, and distribute such information and content and to prepare derivative works of, or incorporate into other works, such information and content, and to grant and authorize sublicenses of the foregoing</li>
<li>The following is an indicative list of the kind of Content that is illegal or prohibited on the Site. <b>malimatrimony.org</b> will investigate and take appropriate legal action in its sole discretion against anyone who violates this Agreement, including without limitation, removing the offending communication / Content from the Service and terminating the Membership of such violators without a refund.</li><br>
<li><b>Illegal and prohibitive Content includes Content which:
</b></li>
<ol style="font-size:18px" type="1.">
<li>is blatantly offensive to the community, such as Content that promotes racism, bigotry, hatred or physical harm of any kind against any group or individual</li>
<li> harasses or advocates harassment of another person</li>
<li>involves the transmission of "junk mail", "chain letters," or unsolicited mass mailing or "spamming"</li>
<li>promotes information that you know is false, misleading or promotes illegal activities or conduct that is abusive, threatening, obscene, defamatory or libellous</li>
<li>promotes an illegal or unauthorized copy of another person's copyrighted work, such as providing pirated computer programs or links to them, providing information to circumvent manufacture-installed copy-protect devices, or providing pirated music or links to pirated music files</li>
<li>contains restricted or password only access pages, or hidden pages or images (those not linked to or from another accessible page)</li>
<li>displays pornographic or sexually explicit material of any kind</li>
<li> provides material that exploits people under the age of 18 in a sexual or violent manner, or solicits personal information from anyone under 18</li>
<li>provides instructional information about illegal activities such as making or buying illegal weapons, violating someone's privacy, or providing or creating computer viruses</li>
<li>solicits passwords or personal identifying information for commercial or unlawful purposes from other users and</li>
<li>engages in commercial activities and/or sales without our prior written consent such as contests, sweepstakes, barter, advertising, and pyramid schemes.</li>
</ol><br>
<li>You must use the <b>malimatrimony.org</b> Service in a manner consistent with any and all applicable local, state, and federal laws, rules and regulations.</li>
<li>You cannot include in your Member profile, visible to other members, any telephone numbers, street addresses, URL's, and email addresses.</li>
</ol>
</ol>
<h3><u>COPYRIGHT POLICY:</u></h3>
<p style="font-size:18px">You cannot post, distribute, or reproduce in any way any copyrighted material, trademarks, or other proprietary information without obtaining the prior written consent of the owner of such proprietary rights. Without limiting the foregoing, if you believe that your work has been copied and posted on the <b>malimatrimony.org</b> service in a way that constitutes copyright infringement, please provide us with the following information:</p>
<ol style="font-size:18px" type="1.">
<li>an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright interest</li>
<li>a description of the copyrighted work that you claim has been infringed</li>
<li>a description of where the material that you claim is infringing is located on our Site</li>
<li>your address, telephone number, and email address</li>
<li>a written statement by you that you have a good faith belief that the disputed use is not authorized by the copyright owner, its agent, or the law</li>
<li>a statement by you, made under penalty of perjury, that the above information in your Notice is accurate and that you are the copyright owner or authorized to act on the copyright owner's behalf.</li>
</ol><br>
<h3><u>MEMBER DISPUTES:</u></h3>
<p style="font-size:18px">You are solely responsible for your advertisement/communications with other <b>malimatrimony.org</b> Members.<br>
<b>malimatrimony.org</b> reserves the right, but has no obligation, to monitor disputes between you and other Members. <br>
<b>malimatrimony.org</b> also reserves the right to take appropriate action against errant members. However,<br>
<b>malimatrimony.org</b> is not obliged to share such action with other members, including complainants.<br>
<b>malimatrimony.org</b> expressly disclaims any responsibility or liability for any transactions or interactions between the members inter-se.</p> <br> 
<h3><u>PRIVACY:</u></h3>
<p style="font-size:18px">Use of the <b>malimatrimony.org</b> Site and/or the <b>malimatrimony.org</b> Service is governed by our Privacy Policy and follow simple guidelines to protect your privacy.</p><br>
<h3><u>DISCLAIMERS:</u></h3>
<ul style="font-size:18px" type="disc">
<li><b>malimatrimony.org</b> is not responsible for any incorrect or inaccurate Content/listing posted on the Site or in connection with the <b>malimatrimony.org</b> Service, whether caused by Users, Members or by any of the equipment or programming associated with or utilized in the Service, nor for the conduct of any User and/or Member of the <b>malimatrimony.org</b> Service whether online or offline.</li>
<li><b>malimatrimony.org</b> assumes no responsibility for any error, omission, interruption, deletion, defect, delay in operation or transmission, communications line failure, theft or destruction or unauthorized access to, or alteration of, User and/or Member communications or any communications by <b>malimatrimony.org</b> to its Members.</li>
<li><b>malimatrimony.org</b> is not responsible for any problems or technical malfunction of any telephone network or lines, computer on-line-systems, servers or providers, computer equipment, software, failure of email or players on account of technical problems or traffic congestion on the Internet or at any web site or combination thereof, including injury or damage to Users and/or Members or to any other person's computer related to or resulting and/or in connection with the <b>malimatrimony.org</b> Service.</li>
<li>Under no circumstances will <b>malimatrimony.org</b> be responsible for any loss or damage resulting from anyone's use of the Site or the Service and/or any Content posted on the <b>malimatrimony.org</b> Site or transmitted to <b>malimatrimony.org</b> Members</li>
<li>The exchange of matchmaking profile(s) through or by <b>"malimatrimony.org"</b> is not a matrimonial offer and/or recommendation from/by <b>malimatrimony.org</b>. <b>malimatrimony.org</b> shall not be responsible for any loss or damage to any individual arising out of, or subsequent to, any relations (including but not limited to matrimonial relations) established pursuant to the use of <b>malimatrimony.org</b>.</li>
<li>The Site and the Service are provided "AS-IS" and <b><b>malimatrimony.org</b></b> expressly disclaims any warranty of fitness for a particular purpose or non-infringement. <b>malimatrimony.org</b> cannot guarantee and does not promise any specific results from use of the Site and/or the <b>malimatrimony.org</b> Service</li>
<li><b>malimatrimony.org</b> expressly disclaims any liability or responsibility whatsoever and howsoever arising as a result of any Content/listing posted on the Site / made available to <b>malimatrimony.org</b> by any Members or the users of the Site or any third party.</li>
<li><b>malimatrimony.org</b> does not assume any responsibility or liability for any illegal Content posted on the Site by any Members, users or any third party.</li>
<li>All liability, whether civil or criminal arising out of any Content that is Posted on the Site will be of that Member / user / third party who has Posted such Content and <b>malimatrimony.org</b> reserves its right to claim damages from such Member/ user / third party that it may suffer as a result of such Content Posted on the Site. <b>malimatrimony.org</b> does not claim ownership of Content you submit or make available for inclusion on the Service.</li>
</ul><br>
<h3><u>LIMITATION ON LIABILITY:</u></h3>
<p style="font-size:18px">In no event will <b>malimatrimony.org</b> be liable to you or any third person for any indirect, consequential, exemplary, incidental, special or punitive damages, including also lost profits arising from your use of the Site or the <b>malimatrimony.org</b> Service, even if <b>malimatrimony.org</b> has been advised of the possibility of such damages. Notwithstanding anything to the contrary contained herein, <b>malimatrimony.org's</b> liability to you for any cause whatsoever, and regardless of the form of the action, will at all times be limited to the amount paid, if any, by you to <b>malimatrimony.org</b>, for the Service during the term of membership</p><br>
<h3><u>JURISDICTION:</u></h3>
<p style="font-size:18px">If there is any dispute about or involving the Site and/or the Service, by using the Site, you unconditionally agree that all such disputes and/or differences will be governed by the laws of India and shall be subject to the exclusive jurisdiction of the Competent Courts in Mumbai, India only.</p><br>
<h3><u>INDEMNITY:</u></h3>
<p style="font-size:18px">You agree to indemnify and hold <b>malimatrimony.org</b>, its subsidiaries, affiliates, officers, agents, and other partners and employees, fully indemnified and harmless from any loss, liability, claim, or demand, including reasonable attorney's fees, made by any third party due to or arising out of your use of the Service in violation of this Agreement and/or arising from a breach of these Terms of Use and/or any breach of your representations and warranties set forth above and/or any fraudulent act on your part.</p>
<h3><u>OTHERS:</b></u></h3>
<ul style="font-size:18px">
<li>By becoming a Member of the <b>malimatrimony.org</b> service, you agree to receive certain specific email from <b>malimatrimony.org</b> and/or its group sites. You can unsubscribe at any time for any reason quickly and easily by clicking on the unsubscribe link enclosed in the mail. You can also manage your subscription to these emails using the My Alert Manager option.</li>
<li>This Agreement, accepted upon use of the Site and further affirmed by becoming a Member of the <b>malimatrimony.org</b> service, contains the entire agreement between you and <b>malimatrimony.org</b> regarding the use of the Site and/or the Service. If any provision of this Agreement is held invalid, the remainder of this Agreement shall continue in full force and effect.</li>
</ul>
<p style="font-size:18px"><b>malimatrimony.org is a trademark of Backend Technologies PVT.LTD.</b><br>
By becoming a member of <b>malimatrimony.org</b> and/or using the Services of the Site, you unconditionally and irrevocably confirm that you have read and understood the above provisions and agree to abide by them.
</p>
</ul>
</div>
</div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="row">
           <!--<div id="container" >
      
      <div id="mytreadmill" class="treadmill" style="border:none;background-color:transparent;height:200px ">
        
        <?php /*?> <?php
      $show=mysqli_query($conn,"select * from testimonial where is_del='no' and status='approved' ") or die(mysqli_error($conn));
        while($row=mysqli_fetch_array($show))
        {
          
              $row['description'];
             $email=$row['email'];
            
          ?>
                    
        <div class="treadmill-unit">
          <h2>
                    <?php
          $showw=mysqli_query($conn,"select * from matrimonialall where email='$email'")or die(mysqli_error($conn));
        while($roww=mysqli_fetch_array($showw))
        {
            echo "<font color=#FFFFFF>". $roww['first_name']."&nbsp".$roww['last_name']."</font>";
        }?>
        </h2>
          <p><?php echo  $row['description']; ?> </p>
        </div><?php
          
        }
      ?><?php */?>
      </div><br>
<br>
<br>

    </div>
    
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/super-treadmill.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#mytreadmill').startTreadmill({
          runAfterPageLoad: true,
                    direction: "left",
                    speed: "medium",
                    viewable: 3,
                    pause: false
        });
      });
    </script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>-->
              
           
        
        
      </div>
      
      
    </div>
  </div>
  <a id="contact"></a>
     <div class="row text-center nothing line__bg testimonials" style="background-color:#FFF">
      <h3 style="color:#000">Contact Us</h3>
    <div class="col-md-4">
          <img  src="img/Cl_logo.png" style="width: 200px; height: 180px; margin-top:-40px;">
        </div>
        <div class="col-md-8">
          <form action="../logo.png" method="post" class="form-inline" role="form">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Your Email</label>
            <input type="email" style="outline:none; border-top-style:hidden;border-right-style:hidden;border-left-style:hidden; border-bottom-style:groove;background-color:white; border-radius:0px;" required class="form-control form-control-lg" name="email" id="exampleInputEmail2" placeholder="your email">
          </div><br><br>
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail2">Your Msg</label>
            <textarea  class="form-control form-control-lg" style="outline:none; border-top-style:hidden;border-right-style:hidden;border-left-style:hidden; border-bottom-style:groove;background-color:white; border-radius:0px;"required name="msg" id="exampleInputEmail2" placeholder="your Msg" ></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-md">submit</button>
        </form>
        
        </div>
     </div>
</footer>

<p class="text-center copyright">Copyright &copy; 2020<a href="www.cloudsoft.com"> Cloudsoft PVT.LTD</a>. All Rights Reserved.</p>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
<script type="text/javascript" src="http://www.htmlpreviews.com/cloud/badminton/credon8/js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="http://www.htmlpreviews.com/cloud/badminton/credon8/js/bootstrap.min.js"></script> 
<script type="text/javascript">
$('.carousel').carousel({
  interval: 3500, // in milliseconds
  pause: 'none' // set to 'true' to pause slider on mouse hover
})
//menu bar active
	$(".menu li").on("click", function() {
	  $(".menu li").removeClass("active");
	  $(this).addClass("active");
	});
</script>


<script type="text/javascript">
$( "a.submenu" ).click(function() {
$( ".menuBar" ).slideToggle( "normal", function() {
// Animation complete.
});
});
$( "ul li.dropdown a" ).click(function() {
$( "ul li.dropdown ul" ).slideToggle( "normal", function() {
// Animation complete.
});
$('ul li.dropdown').toggleClass('current');
});


</script>
</body>

</html>