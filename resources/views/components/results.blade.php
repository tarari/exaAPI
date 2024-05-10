<script setup>
    const datos = defineProps(['data']);
</script>

    <template>
        <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="item in data" :key="item.id">
            <td>{{ item.name }}</td>
            <td>{{ item.price }}</td>
            <td>{{ item.stock }}</td>
            </tr>
        </tbody>
        </table>
    </template>
