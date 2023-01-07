const { createClient } = supabase;

// Create a single supabase client for interacting with your database 
supabase = createClient('https://htmuqkpvnbzotfgdsgnj.supabase.co', 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Imh0bXVxa3B2bmJ6b3RmZ2RzZ25qIiwicm9sZSI6ImFub24iLCJpYXQiOjE2Njc4Mzg1MTEsImV4cCI6MTk4MzQxNDUxMX0.vdi7NsnnMc4DC11N8vi29NIGU1Yxz1Y1ZXtJDg5g4wc')

console.log(supabase)

const form = document.querySelector('#contact-form');
form.addEventListener('submit', async (event) => {
    // event.preventDefault();

    const formInputs = form.querySelectorAll('input, textarea');

    let submission = {};

    formInputs.forEach(element => {
        const { value, name } = element;
        if (value) {
            submission[name] = value;
            console.log(element.value)
        }
    })

    
    const { error, data } = await supabase.from('contact-portfolio').insert([submission]);
    // console.log({ error, data });

    if (error) {
        alert('Il y a une erreur dans le formulaire, essayez à nouveau s\'il vous plaît');
        
    } else {
        alert('Le formulaire a bien été envoyé !');
    }

    formInputs.forEach(element => element.value = '');
})