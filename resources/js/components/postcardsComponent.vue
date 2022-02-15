<template>
    <div id="postcards">
        <h1>Postcards</h1>
        
        <table border="2">
            <tr>
                <th>sender</th>
                <th>address</th>
                <th>text</th>
                <th>image</th>
                
            </tr>

            <tr v-for="postcard in postcards" :key="postcard.id">
                <td>{{postcard.sender}}</td>
                <td>{{postcard.addres}}</td>
                <td>{{postcard.text}}</td>
                <td><img :src="'storage/postcards/' + postcard.image"></td>
            </tr>
        </table>
    </div>
</template>
<script>
export default {
    data: function(){
        return{
            postcards: []
        };
    },
    props: {

        user: String
    },
    mounted() {
        axios.get('/api/postcards/list')
        .then(r=> this.postcards = r.data)
        .catch(e=>console.error(e));
    },
}
</script>
