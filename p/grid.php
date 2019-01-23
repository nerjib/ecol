<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
const axios = require("axios")

let url = "https://api.grid-nigeria.org/"

const getDatasets = (resource_name, size = 200, page = 1, sort_by = "global_id", fields = "", cql = "") => {
    const endpoint = `${url}${resource_name}`
    axios.get(endpoint, {
        params: {
            size: size,
            page: page,
            sort_by: sort_by,
            fields: fields,
            cql: cql
        }
    }).then(response => {
        console.log(response.data)
        return response.data
    })
}

module.exports.getDatasets = getDatasets

</script>
<?php echo "helo" ?>