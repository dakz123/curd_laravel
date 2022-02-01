<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
  
  <input type="text" name[]="activity" id="activity" multiple>
</body>
<script>
    function getActivity(){
        let activity='recreational';
        let valueq=[];
        fetch('http://www.boredapi.com/api/activity?type='+activity)
        .then(res=>res.json())
        .then(data=>{
            
            let g=data.activity;
            return g;
           
        })

    }
    
    for (let index = 0; index < 10; index++) {
        
        getActivity() 
          
    }
   
    var first = document.getElementById("activity").value;
   console.log(g); 
    
</script>
</html>