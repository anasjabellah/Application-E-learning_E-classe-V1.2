document.querySelectorAll('.btn-confirm').forEach((btn)=>{
    console.log('added btn '+btn.textContent);
    btn.addEventListener('click',(e)=>{
        
        if(!confirm('are you sure you want to '+e.target.textContent)===true){
             e.preventDefault();   
        }
        
    })
    
})