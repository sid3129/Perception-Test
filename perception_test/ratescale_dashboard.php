<!DOCTYPE html> 
<html> 
<head>
<style>
table, td {
    border: 1px solid black;
}
</style>
</head>

<body> 

<script>
//Reading file names for set 1
<?php $txt_file    = file_get_contents('files_set_1.txt');?>
var output = <?= json_encode($txt_file,JSON_HEX_APOS); ?>;
var files2=[];	
output=output.split("|");	
for(var i=0;i<output.length;i++)
	{
	files2.push(output[i]);
	}   
console.log(files2);
	
	
	
//Generating randomn subscripts
var length=files2.length;
var subscripts = [];
var no_of_files = 180;
for(var i=0 ; i<no_of_files ; i++)
{
	var x=Math.floor(Math.random() * length);
	var flag=0;
	for(var j=0;j<subscripts.length;j++)
	{
		if(x==subscripts[j])
		{
		flag=1;
		break;
		}
	}
	if(flag==0)
	{	
		subscripts.push(x);
	}
}
//subscripts.sort();


var files_set_1=[];
for(var i=0;i<subscripts.length;i++)
{
	files_set_1.push(files2[subscripts[i]]);
}
console.log(files_set_1);








//Reading file names for set 2
<?php $txt_file    = file_get_contents('files_set_2.txt');?>
var output = <?= json_encode($txt_file,JSON_HEX_APOS); ?>;
var files2=[];	
output=output.split("|");	
for(var i=0;i<output.length;i++)
	{
	files2.push(output[i]);
	}   
console.log(files2);
//Generating randomn subscripts
var length=files2.length;
var subscripts = [];
var no_of_files = 80; //updated neeks
for(var i=0 ; i<no_of_files ; i++)
{
	var x=Math.floor(Math.random() * length);
	var flag=0;
	for(var j=0;j<subscripts.length;j++)
	{
		if(x==subscripts[j])
		{
		flag=1;
		break;
		}
	}
	if(flag==0)
	{	
		subscripts.push(x);
	}
}
//subscripts.sort();


var files_set_2=[];
for(var i=0;i<subscripts.length;i++)
{
	files_set_2.push(files2[subscripts[i]]);
}

console.log(files_set_2);
//********************************************************************************************************************************




//create a form
var my_form = document.createElement("form");
my_form.setAttribute('method',"post");
my_form.setAttribute('name',"desc_form");
my_form.setAttribute('action',"submit.php");	
my_form.setAttribute('onsubmit',"return validateForm()");

//Enter username
var h = document.createElement("H3");
var t = document.createTextNode("Username");
h.appendChild(t);	
my_form.appendChild(h); 
var user_box = document.createElement("input");
user_box.name="username";
my_form.appendChild(user_box);

//Enter age
var h = document.createElement("H3");
var t = document.createTextNode("Age");
h.appendChild(t);	
my_form.appendChild(h); 

var age_box = document.createElement("input");
age_box.type = "number";
age_box.name="age";
my_form.appendChild(age_box);


//Enter sex
var h = document.createElement("H3");
var t = document.createTextNode("Sex");
h.appendChild(t);	
my_form.appendChild(h);

var t = document.createTextNode("male");
my_form.appendChild(t); 
var sex_box = document.createElement("input");
sex_box.type = "radio";
sex_box.name="sex";
sex_box.id="sex";
sex_box.value="male";
sex_box.required= true;
my_form.appendChild(sex_box);

var t = document.createTextNode("female");
my_form.appendChild(t); 
var sex_box = document.createElement("input");
sex_box.value= "female";
sex_box.type = "radio";
sex_box.name="sex";
sex_box.required= true;
my_form.appendChild(sex_box);

var t = document.createTextNode("other");
my_form.appendChild(t); 
var sex_box = document.createElement("input");
sex_box.value= "other";
sex_box.type = "radio";
sex_box.name="sex";
sex_box.required= true;
my_form.appendChild(sex_box);


//Enter test taken or not
var h = document.createElement("H3");
var t = document.createTextNode(" Have you taken listening test earlier ? ");
h.appendChild(t);	
my_form.appendChild(h); 


var t = document.createTextNode("yes");
my_form.appendChild(t); 
var test_box = document.createElement("input");
test_box.type = "radio";
test_box.name="test";
test_box.value="yes";
test_box.required= true;
my_form.appendChild(test_box);

var t = document.createTextNode("no");
my_form.appendChild(t); 
var test_box = document.createElement("input");
test_box.type = "radio";
test_box.value= "no";
test_box.name="test";
test_box.required= true;
my_form.appendChild(test_box);

//Creating page break
var mybr = document.createElement('br');
my_form.appendChild(mybr);	
var mybr = document.createElement('br');
my_form.appendChild(mybr);	
var mybr = document.createElement('br');
my_form.appendChild(mybr);	
	
//****************************************************************
var h = document.createElement("H1");
var t = document.createTextNode("Set1");
h.appendChild(t);	
my_form.appendChild(h); 
	
//Creating table for set 1
var x = document.createElement("TABLE");
x.setAttribute("id", "myTable1");
my_form.appendChild(x); 


var h = document.createElement("H1");
var t = document.createTextNode("Set2");
h.appendChild(t);	
my_form.appendChild(h); 
	
//Creating table for set 2
var x = document.createElement("TABLE2");
x.setAttribute("id", "myTable2");
my_form.appendChild(x); 

//Creating page break
var mybr = document.createElement('br');
my_form.appendChild(mybr);		
	
//create a button
var submit_button = document.createElement("input");
submit_button.type = "submit";
submit_button.value = "Submit";
my_form.appendChild(submit_button);

//Append the form to html
document.getElementsByTagName('body')[0].appendChild(my_form); //pure javascript

//*************************************************************************************************************
//Adding to set1
var file_ctr =0;
for(var i=0 ; i<10 ; i++) //change this
{
	//Adding a row
	var y = document.createElement("TR");
    y.setAttribute("id", "myTr1f"+i);
    document.getElementById("myTable1").appendChild(y);
	
	for(var j=0;j<3;j++)
	{
		//Adding a column
		var z = document.createElement("TD");
	
		//creating audio controls
		var x = document.createElement("AUDIO");
		x.controls = true;
		x.load();
		x.src="set1/"+files_set_1[file_ctr];
	//	console.log(x.src);
		z.appendChild(x);
		
		//Creating page break
		var mybr = document.createElement('br');
		z.appendChild(mybr);
		
		//creating radio buttons
		var t = document.createTextNode("scream");
		z.appendChild(t);
		var type_box = document.createElement("input");
		type_box.type = "radio";
		type_box.name= "type_set1_"+files_set_1[file_ctr];
		type_box.value="scream";
		type_box.required= true;
		z.appendChild(type_box);
	
		var t = document.createTextNode("speech");
		z.appendChild(t);
		var type_box = document.createElement("input");
		type_box.type = "radio";
		type_box.name= "type_set1_"+files_set_1[file_ctr];
		type_box.required= true;
		type_box.value="speech";
		z.appendChild(type_box);
	
		var t = document.createTextNode("environment");
		z.appendChild(t);
		var type_box = document.createElement("input");
		type_box.type = "radio";
		type_box.name="type_set1_"+files_set_1[file_ctr];
		type_box.value="environment";
		type_box.required= true;
		z.appendChild(type_box);
		
		document.getElementById("myTr1f"+i).appendChild(z);
	//	console.log(files_set_1[file_ctr]);
		file_ctr++;

	}
}


//*******************************************************************************************************************
//Adding to set2
var file_ctr =0;
for(var i=0 ; i<15 ; i++)//change this
{
	//Adding a row
	var y = document.createElement("TR");
    y.setAttribute("id", "myTr2f"+i);
    document.getElementById("myTable2").appendChild(y);
	
	for(var j=0;j<3;j++)
	{
		//Adding a column
		var z = document.createElement("TD");
	
		//creating audio controls
		var x = document.createElement("AUDIO");
		x.controls = true;
		x.load();
		x.src="set2/"+files_set_2[file_ctr];
		z.appendChild(x);
	//	console.log(x.src);
		//Creating page break
		var mybr = document.createElement('br');
		z.appendChild(mybr);
		
		//creating radio buttons
		var t = document.createTextNode("scream");
		z.appendChild(t);
		var type_box = document.createElement("input");
		type_box.type = "radio";
		type_box.name= "type_set2_"+files_set_2[file_ctr];
		type_box.value="scream";
		type_box.required= true;
		z.appendChild(type_box);
	
		var t = document.createTextNode("speech");
		z.appendChild(t);
		var type_box = document.createElement("input");
		type_box.type = "radio";
		type_box.name= "type_set2_"+files_set_2[file_ctr];
		type_box.required= true;
		type_box.value="speech";
		z.appendChild(type_box);
	
		var t = document.createTextNode("environment");
		z.appendChild(t);
		var type_box = document.createElement("input");
		type_box.type = "radio";
		type_box.name="type_set2_"+files_set_2[file_ctr];
		type_box.value="environment";
		type_box.required= true;
		z.appendChild(type_box);
		
		document.getElementById("myTr2f"+i).appendChild(z);
	//	console.log(files_set_2[file_ctr]);
		file_ctr++;

	}
}

function validateForm()
{
	

	var a = document.forms["desc_form"]["username"].value;
	var b = document.forms["desc_form"]["age"].value;
	var c = document.forms["desc_form"]["sex"].value;
	var d = document.forms["desc_form"]["test"].value;
	if(a==""||a==null)
		{
			alert("Please Enter username");
			return false;
		}
	else if(b==""||b==null)
		{
			alert("Please Enter age");
			return false;
		}
	
	else if(c==""||c==null)
		{
			alert("Please Enter sex");
			return false;
		}
	else if(d==""||d==null)
		{
			alert("Please answer if you have taken this test before");
			return false;
		}
		

}

</script> 

</body> 
</html>

