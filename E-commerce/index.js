
    const searchInput = document.getElementById("searchInput");


    const namesFromDOM = document.getElementsByClassName("name");

    searchInput.addEventListener('keyup',(event)=>{
        const { value } = event.target;
        // get user search input converted to lowercase
        const searchQuery = value.toLowerCase();
        for (const nameElement of namesFromDOM) {
            // store name text and convert to lowercase
            let name = nameElement.textContent.toLowerCase();
            console.log(name)
            
            // compare current name to search input
            if (name.includes(searchQuery)) {
                // found name matching search, display it
                
            } else {
                // no match, don't display name
                
            }
        }
    
    })
    











//!Creating an array of object

let imgArr = [
    {
        name: 'Nike Red shoe',
        img: 'images/shoe.jpg',
        price:100
    },
    {
        name: 'Blue shoe',
        img: 'images/shoe1.jpg',
        price:100
    },
    {
        name: 'White crop Top',
        img: 'images/images (8).jpg',
        price: 40
    },
    {
        name: 'White crop top',
        img: 'images/images (8).jpg',
        price: 200
    },
    {
        name: 'Red skirt',
        img: 'images/images (7).jpg',
        price: 50
    },
    {
        name: 'Black skirt',
        img: 'images/images (6).jpg',
        price:50
    },
    {
        name: 'Vintage T-shirt',
        img: 'images/images (3).jpg',
        price:100
    },
    {
        name: 'Denim Long sleves',
        img: 'images/images (2).jpg',
        price:100
    },
    {
        name: 'Red tank top',
        img: 'images/download.jpg',
        price:40
    },
    {
        name: 'Sweat shirt',
        img: 'images/sweat.jpg',
        price:40
    },
    {
        name: 'All star shoe',
        img: 'images/shoe3.webp',
        price:80
    }
    


]

//*console.log(imgArr)

//! Selecting the container from my Html page
let container = document.querySelector(".container")
//let cart = 1
//let cartQuan = document.querySelector(".cart")


//! Creating a for loop that loops through my array
    for (let i = 0; i < imgArr.length; i++) {

        //* Slecting the object properties from my array
        const proName = imgArr[i].name
        const proPrice = imgArr[i].price

        

        //* creating a product div
        let productDiv = document.createElement('div')
        productDiv.setAttribute('class', 'products')
        container.append(productDiv)

    //* Creating an image elemnt and appending it to my product div
      let proImg = document.createElement('img')
      proImg.setAttribute('src', imgArr[i].img)
      
      
      //! Getting the Src attribute from my image
      let ImageSrc = proImg.getAttribute('src')

      //!creating a data-id to track my product

      proImg.setAttribute('data-id', i)
      let dataId = proImg.getAttribute('data-id')
    
      proImg.classList.add('Img')
      productDiv.append(proImg)

      

      //!Creating a p tag element
      
      let pTag = document.createElement('p')
      pTag.classList.add('pTag')
      pTag.innerHTML = `${proName}`
      productDiv.append(pTag)

      let hTag = document.createElement('p')
      hTag.classList.add('hTag')
      hTag.innerHTML = `$${proPrice}`
      productDiv.append(hTag)

      let inpu = document.createElement('input')
      inpu.classList.add('inpu')
      inpu.setAttribute('type', 'number')
      inpu.setAttribute('value', 1)
      inpu.setAttribute('min', 1)
      inpu.setAttribute('max', 5)
      
      productDiv.append(inpu)

      


      //! creating a button element
      let btn= document.createElement('button')
      btn.setAttribute('class', 'btn btn-primary')
      btn.innerHTML = "Buy Now"
      productDiv.append(btn)

      //! creating a button element
      btn.addEventListener('click', ()=>{
        //cartQuan.innerHTML = cart++
        
        const Data ={
            
            imgSrc: ImageSrc,
            niyuName: proName,
            niyuPrice:proPrice,
            niyuInp: inpu.value
            


        }
        console.log("clicked", Data.niyuName)
        localStorage.setItem("Data", JSON.stringify(Data))
        
        let uri = `?name=${proName}&id=${dataId}`;
        let encoded = encodeURI(uri);
        window.location.href = "product.html" + encoded
      })

       
        
      

    

      
      

      
        
        
        
    }





