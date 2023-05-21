const express = require('express')
const bodyParser = require('body-parser')
const path = require('path')
const app = express()
const PORT = process.env.PORT || 2300

//middle ware
app.use(express.json())
app.use(bodyParser.urlencoded({extended: false}))
app.use(express.static(path.join(__dirname, 'public')))

app.get('^/$|/index(.html)?', (req, res)=>{
    res.sendFile(path.join(__dirname, 'view', 'index.html'))

})



app.get('/api/courses', (req, res)=>{
    res.send("Hello")
    console.log(req.params.url)
    

})

app.get('/*', (req, res)=>{
    res.status(404).sendFile(path.join(__dirname, 'view', '404.html'))

})


app.listen(PORT, ()=>{console.log(`Server Running at PORT: ${PORT}`)})