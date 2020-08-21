let hidden = document.getElementById('hidden');
let votingbutton = document.getElementById('votingbutton');
let hideunderbuttonvalue = document.getElementById('hideunderbutton').value;
let hideUnderButtonUserId = document.getElementById('hideunderbuttonuserid').value;



votingbutton.addEventListener('click',()=>{
    hidden.value = true;
    let val = hidden.value;
    
    window.location.href = "http://localhost/evm/card.php?candidateid="+hideunderbuttonvalue+"&userid="+hideUnderButtonUserId +"&voted=" + val;
    
})

