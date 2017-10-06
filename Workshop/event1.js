function roundshow(i)
{
	if (i==1) 
	{
      document.getElementById("eventstruct").innerHTML="The teams shall mail a zip file containing the abstract of their design to ace@iitp.ac.in . The abstract should contain the following:- Drawings of the design (isometric and orthographic views) with proper dimensioning on AutoCAD or clear pictures of handmade sketches. Clearly state the specifications and advantages of your design and any innovative idea that you have. · Analysis of the design according to the dimensions specified in the problem statement in a simulation software namely Bridge Designer 2017. The analysis is mandatory. Workshop for the same shall be conducted. The teams will be shortlisted for Round 2 on the basis of their abstracts.";
    }
    else if (i==2) 
    {
       document.getElementById("eventstruct").innerHTML="The shortlisted teams shall construct their bridge under the surveillance of the organising team at IIT Patna.";
    } 
    else if(i==3)
    { 
       document.getElementById("eventstruct").innerHTML="The model built by each team will be tested till failure (yielding) by applying an incremental static load.";
    } 
}

