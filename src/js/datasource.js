// Desc: data source for the chart
export async function getDataPerangkatDesa(kodeDesa) {
    // fetch data from api
    const response = await fetch("https://v3.gigades.id/rest/api/perangkat/getPerangkatDesaNoAuth/" + kodeDesa);

    // convert response to json
    const jsonData = await response.json();

    // array container
    const data = [];

    // convert json data to proper format
    jsonData.response.forEach((item) => {

        // push the data to array container
        data.push(new SetData(
            item.jabatan.id_jabatan,
            item.penduduk.nama_lengkap,
            item.jabatan.nama_jabatan,
            item.jabatan.parent ? item.jabatan.parent.id_jabatan : null,
            '#71AF17',
            item.url_foto_perangkat_desa)
        );
    });

    // return the data
    return data;
}

// data constructor
function SetData(id, name, role, manager, color, imageUrl) {
    this.id = id;
    this.name = name;
    this.role = role;
    this.manager = manager;
    this.color = color;
    this.imageUrl = imageUrl;
}