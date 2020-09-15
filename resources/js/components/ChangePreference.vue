<template>
    <div>
       <button @click="change"  class="btn bg-transparent">Mail Preference({{this.option}})</button>
    </div>
</template>
<script>
export default 
{   
    props:['mail'],
    data()
    {
        return{
            option:'',
            result:''
        }
    },
    methods:
    {
        change()
        {
            axios.post('/changePreference')
            .then((response)=>{this.result = response.data
            this.valueChanged()});
        },
        valueChanged()
        {   
            if(this.result == 0)
            {
                this.option = "Off"
            }
            else 
            {
                this.option ="On"
            }
        }
    },
    created()
    {
        if(this.mail == 0)
        {
            this.option = "Off"
        }
        else 
        {
            this.option ="On"
        }
    }
}
</script>