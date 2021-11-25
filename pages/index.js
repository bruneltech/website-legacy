import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'
import navbarStyle from '../styles/Navbar.module.css'
import NavBar from '../modules/navbar.js'
import Footer from '../modules/footer.js'

export default function Home() {
  return (
    <div className={styles.container}>
      <Head>
        <title>Brunel Tech Society</title>
        <meta name="description" content="The website for Brunel Techsoc" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className={styles.main}>
        {/* Header */}
        {/* <NavBar /> */}

        {/* Main Content*/}
        <div className={styles.mainContent}>
          {/* Add a large, dark image to the background, with text infront and a down arrow to scroll the page */}
          <div className={styles.imageContainer}>
            <div className={styles.textContainer}>
              <h1 className={styles.title}>something to go here (including a decent image)</h1>
              <a href="#about" className={styles.scrollDown}>
                <img src="" alt="Click to Scroll Down" />
              </a>
            </div>
          </div>

          <div className={styles.content_intro}>

          </div>
        </div>
      </main>

      {/* <Footer/> */}
    </div>
  )
}
