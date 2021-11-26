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
      </Head>

      <main className={styles.main}>
        <Image src="/ident.png" alt="Brunel Tech Society" width={200} height={200} />
        <h1 className={styles.title}>Under Construction</h1>
      </main>
    </div>
  )
}
