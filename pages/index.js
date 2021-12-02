import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'

export default function Home() {
  return (
    <div className={styles.container}>
      <Head>
        <title>Brunel Tech Society</title>
        <meta name="description" content="Website Under Construction." />
        <link rel="icon" href="/favicon.ico" />
        <link rel="stylesheet" href="https://use.typekit.net/fba0knw.css"></link>
      </Head>

      <main className={styles.main}>
        <img src="ts_kind_of_web_friendly.png" alt="Brunel Tech Society" className={styles.logo_large}/>
        <img src="small_logo.png" alt="Brunel Tech Society - Mobile Logo" className={styles.logo_small}/>

        <h1 className={styles.title}>Under Construction</h1>
        <h4 className={styles.title_sub}>(watch this space)</h4>

        <a href="https://brunelstudents.com/societies/tech"><div className={styles.button}>
          <p>Learn More</p>
        </div></a>
        <br></br>
        <a href="mailto:info@bruneltech.net"><div className={styles.button}>
          <p>Get in Touch</p>
        </div></a>
      </main>
    </div>
  )
}
