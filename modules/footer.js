// Create a react component.

import React from 'react';
import styles from '../styles/Navbar.module.css'


class Footer extends React.Component {

    render() {
        return (
            <footer>
                <div className={styles.footerContainer}>
                    <div className={styles.footerContent}>

                        <div className={styles.copyInfo}>
                            <p className={styles.copytxt}>©️ Brunel Tech Society 2021</p>
                        </div>

                        <div className={styles.socialMedia}>
                            <a href="https://brunelstudents.com/idk"><div className={styles.unionIcon}>
                                <img src="union-brand.svg" alt="Union of Brunel Students Logo" />
                            </div></a>

                            <a href="#"><div className={styles.socialIcon}>
                                <img className={styles.socialLogo} src="twitter_logo.svg" alt="Twitter" />
                            </div></a>

                            <a href="#"><div className={styles.socialIcon}>
                                <img className={styles.socialLogo} src="instagram_logo.png" alt="Instagram" />
                            </div></a>
                        </div>


                    </div>
                </div>
            </footer>
        )
    }
}

export default Footer;


