
<div x-data="dataButton()" x-init="init()">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" @click="fetchData">products..</button>
    <div x-show="data" class="mt-4">
        <p x-text="data.message"></p>
        <ul>
            <template x-for="item in data.items" :key="item.name">
                <li x-text="`${item.name}: ${item.price} ${item.stock}`"></li>
            </template>
        </ul>
    </div>
</div>

<script>
    function dataButton() {
        return {
            data: null,
            init() {
            },
            fetchData() {
                axios.get('{{ route("products") }}')
                    .then(response => {
                        this.data = response.data;
                        alert(this.data.message);
                    })
                    .catch(error => {
                        console.error('Error fetching data:', error);
                    });
            }
        }
    }
</script>


