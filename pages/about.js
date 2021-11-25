import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'
import navbarStyle from '../styles/Navbar.module.css'
import NavBar from '../modules/navbar.js'
import Footer from '../modules/footer.js'

export default function About() {
  return (
    <div className={styles.container}>
      <Head>
        <title>About Us - Brunel Tech Society</title>
        <meta name="description" content="The website for Brunel Techsoc" />
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className={styles.main}>
        {/* Header */}
        {/* <NavBar /> */}

        {/* Main Content*/}
        <div className={styles.mainContent}>
          {/* Add a large, dark image to the background, with text infront and a down arrow to scroll the page */}
          <div className={styles.pageTitleContainer}>
            <div className={styles.pageTitleTextContainer}>
              <h1 className={styles.pageTitle}>About Us</h1>
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
