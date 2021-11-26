import Head from 'next/head'
import Image from 'next/image'
import styles from '../styles/Home.module.css'
import navbarStyle from '../styles/Navbar.module.css'
import NavBar from '../modules/navbar.js'
import Footer from '../modules/footer.js'
import CommitteeMember from '../modules/committee_member.js'

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

          <div className={styles.content_container}>
            <p className={styles.content_text}>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere,
              magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
              Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.<br></br><br></br>
              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin
              pharetra nonummy pede. Mauris et orci.<br></br><br></br>
              Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
              Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem</p>
          
            <br></br>
            <h1 className={styles.sectionTitle}>The Committee of 2021/22</h1>
            <div className={styles.committee_container}>
              <CommitteeMember
              name={"Person PersonPerson"}
              socrole={"President"}
              contacton={"Events, Partnerships"}
              shortdesc={"A very short sentence about yourself. Maybe about this long?"}
              email={"0000000@brunel.ac.uk"}
              picture={"favicon.ico"}/>

              <CommitteeMember
              name={"Person PersonPerson"}
              socrole={"Secretary"}
              contacton={"Records, Memberships"}
              shortdesc={"A very short sentence about yourself. Maybe about this long?"}
              email={"0000000@brunel.ac.uk"}
              picture={"favicon.ico"}/>

              <CommitteeMember
              name={"Person PersonPerson"}
              socrole={"Treasurer"}
              contacton={"Sponsorships, Funding, Finances"}
              shortdesc={"A very short sentence about yourself. Maybe about this long?"}
              email={"0000000@brunel.ac.uk"}
              picture={"favicon.ico"}/>

              <CommitteeMember
              name={"Person PersonPerson"}
              socrole={"Web Director"}
              contacton={"Technical Infrastructure"}
              shortdesc={"A very short sentence about yourself. Maybe about this long?"}
              email={"0000000@brunel.ac.uk"}
              picture={"favicon.ico"}/>

              <CommitteeMember
              name={"Person PersonPerson"}
              socrole={"Creative Director"}
              contacton={"Design"}
              shortdesc={"A very short sentence about yourself. Maybe about this long?"}
              email={"0000000@brunel.ac.uk"}
              picture={"favicon.ico"}/>


            </div>
          
          </div>

          
        </div>
      </main>

      {/* <Footer/> */}
      <Footer/>
    </div>
  )
}
