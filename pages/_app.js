import '../styles/globals.css'
import NavBar from '../modules/navbar.js'
import Footer from '../modules/footer.js'

function MyApp({ Component, pageProps }) {
  return (
    <div className="app">
      <NavBar/>
      <Component {...pageProps} />
      <Footer/>
    </div>
    
  )
}

export default MyApp
