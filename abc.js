const form=document.getElementById('form');
const uname_1=document.getElementById('uname');
const password_1=document.getElementById('pass');
form.addEventListener('submit', (e)=>{
	e.preventDefault();
	validate();
});
function validate()
{
	if(uname_1.value=="")
		setError(uname_1,'User name is empty');
	else
		setSuccess(uname_1);
}
function setError(input,msg)
{
	const x=document.getElementById('form-control');
	const smalltag=x.querySelector('small');
	smalltag.innerHTML=msg;
	smalltag.style.visibility="visible";
	const itag=document.getElementById('error');
	itag.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}
function setSuccess(input)
{
	const itag=document.getElementById('success');
	itag.style.visibility="visible";
	itag.style.color="green";
	input.style.borderColor="green";
}