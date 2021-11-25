// Create a react component.

import React from 'react';
import styles from '../styles/Navbar.module.css'


class Navbar extends React.Component{

    render(){
        return(
            <div className={styles.navBarContainer}>
                {/*Society Logo Container*/}
                <div className={styles.ident}>
                    <div className={styles.logoContainer}>
                        <img className={styles.logo} src="ts_kind_of_web_friendly.png" alt="logo" />
                    </div>

                    <a href="#"><div className={styles.joinButton}>
                        <p className={styles.joinText}>JOIN US</p>
                    </div></a>
                </div>

                {/* Link Section Part 1 */}
                <div className={styles.navigation}>
                    {/* Create a navbar with the links Home, About us, Blog and Society. Society should drop down to another menu.*/}
                    <div className={styles.navLinks}>
                        <a className={styles.navLink} href="/">Home</a>
                        <a className={styles.navLink} href="/about">About Us</a>
                        <a className={styles.navLink} href="#">Blog</a>
                        <a className={styles.navLink} href="#">Society</a>

                        <div className={styles.dropdown}>
                            <a href="#">Events</a>
                            <a href="#">Gallery</a>
                            <a href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
                
            </div>
        )
    }
}

export default Navbar;