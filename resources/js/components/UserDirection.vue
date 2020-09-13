<template>
</template>
<script>
export default {
    data()
    {
        return {
            dblat : '',
            dblng : '',
            url: "https://www.google.com/maps/dir/?api=1",
            origin:'',
            destination:''
        }
    },
    mounted() 
    {
        let timerInterval
        Swal.fire({
        title: 'Wait a second...',
        timer: 2000,
        timerProgressBar: true,
        onBeforeOpen: () => 
        {
            Swal.showLoading()
            timerInterval = setInterval(() => 
            {
                const content = Swal.getContent()
                if (content) 
                {
                    const b = content.querySelector('b')
                    if (b) 
                    {
                        b.textContent = Swal.getTimerLeft()
                    }
                }
            }, 100)
        },
        onClose: () => 
        {
            clearInterval(timerInterval)
        }
        }).then((result) => {})

        if (navigator.geolocation) 
        {
            navigator.geolocation.watchPosition((position)=> 
            {
                this.dblat = position.coords.latitude
                this.dblng = position.coords.longitude
                this.origin = "&origin=" + this.dblat + "," + this.dblng               
                this.destination = "&destination=27.7286,85.3457"
                window.location.href = new URL(this.url + this.origin + this.destination)   
            });
            
        }
        
        if(this.dblat == "")
        {  
            this.origin = "&origin=27.7286, 85.3457" 
            window.location.href = new URL(this.url + this.origin)
        }   
    } 
}
</script>
