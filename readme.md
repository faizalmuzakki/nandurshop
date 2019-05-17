## Nandurshop

> Dalam rangka memenuhi tugas kuliah Teknologi Bergerak

### Member
- Faizal Khilmi Muzakki - 05111640000120
- Marde Fasma Ul'Aza - 05111640000046

### Penjelasan
- Aplikasi berbasis web dengan kerangka kerja Laravel sebagai restapi-server

### What we serve
#### Commodity
- Showing all or a proportion of commodity (default all)
    - GET /api/commodity [all]
    - GET /api/commodity?take=[as you want]
- Create new commodity
    - POST /api/commodity
    - via body: name(string), variety_id(int), planted_at(datetime), image(file)
- Show commodity by id
    - GET /api/commodity/{id}
- Update commodity by id
    - PUT /api/commodity
    - via body: id(int), name(string), variety_id(int), planted_at(datetime), image(file)
- Delete commodity by id
    - DELETE /api/commodity
    - via body: id(int)

#### Variety
- Showing all or a proportion of variety (default all)
    - GET /api/variety [all]
    - GET /api/variety?take=[as you want]
- Create new variety
    - POST /api/variety
    - via body: name(string), duration(int)
- Show variety by id
    - GET /api/variety/{id}
- Update variety by id
    - PUT /api/variety/{id}
    - via body: name(string), duration(int)
- Delete variety by id
    - DELETE /api/variety/{id}
