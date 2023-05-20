var con = document.getElementById("container")
var products = document.querySelector(".product-img")
var proPName = document.querySelector(".product-name")
var proPrice = document.querySelector(".product-price")
var proQuan = document.querySelector(".product-Quantity")
var Total = document.querySelector(".Total")
var remove = document.querySelector(".Remove")
var pur = document.querySelector("#btn2")
var btn = document.getElementById('btn')





  
        let data = localStorage.getItem("Data")
         let obj = JSON.parse(data)


         

        let img = document.createElement('img')
        img.classList.add('proImg')
        img.setAttribute('src', obj.imgSrc)
        products.append(img)

        let p = document.createElement('p')
        p.innerHTML = obj.niyuName
        proPName.append(p)

        let p2 = document.createElement('p')
        p2.innerHTML = `$${obj.niyuPrice}`
        proPrice.append(p2)

        let quan = document.createElement('p')
        quan.innerHTML = obj.niyuInp
        proQuan.append(quan)

        


        let total  = document.createElement('p')
        total.innerHTML = `$${obj.niyuPrice * obj.niyuInp}`
        Total.append(total)


   
        
        btn.addEventListener('click', ()=>{
            console.log("click")
            remove.parentElement.remove()
            let refreah = setTimeout(() => {
                window.location.href = 'index.html'
            }, 1000);
        })

        pur.addEventListener('click', ()=>{
            window.location.href = 'checkout.html'
        })
        
        
   
    

    








/*var con = document.getElementById("container")

    let div = document.createElement('div')
    div.setAttribute('class', 'Cart')
    con.append(div)

        let data = localStorage.getItem("Data")
        let obj = JSON.parse(data)
        let img = document.createElement('img')
        img.setAttribute('src', obj.imgSrc)
       
        div.append(img)*/