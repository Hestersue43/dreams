function contact(){
var firstname=name
if (firstname.indexOf('') >=0){
firstname=name.split('').slice(0. -1).join('');
}	

$.ajax ({
	url: "//formspree.io/dreams.veldamart@gmail.com",
	type: "POST",
	dataType: "json",
	data: {
		name: name,
		phone: phone,
		email: email,
		message:message
	},
	cache: false,
	success function(){
	$("#btnSubmit").attr("disableb", false);
	$('#success').html ("<div class='alert alert-success'>");
	$('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
	.append("</button>");
	$('#success > .alert-success').append("<strong>Your message has been sent</strong>");
	$('#success > .alert-success').append("</div>");
	//clear all fields
	$('#contactForm').trigger("reset");
	},
	error function(){
	//Fail message
	$('#success').html ("<div class-'alert alert-danger'>");
	$('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert'aria-hidden='true'>&times;")
	.append("</button>");
	$('#success>.alert-danger').append("<strong>Sorry"+ firstName + ", It seems that my mail server is not responding. Please try again later!</strong>");
	$('#success>.alert-danger').append("</div>");
	//clear all fields
	$('#contactForm').trigger("reset");
	},
      })
     },
        filter function(){
	return $(this).is(":visisble");
     },
   });

$("a[data-toggle=\"tab\").click(function(e) {
  e.preventDefault();
 $(this).tab("show");
});
});
?/when clicking on Full hide fail/success boxes
$('#name).focus(function(){
$('#success).html(function(");
 });
  






