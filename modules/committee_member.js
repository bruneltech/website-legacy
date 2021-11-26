// Create a react component.

import React from 'react';
import styles from '../styles/CommitteeMember.module.css'


export default function CommitteeMember(props){
    return (
        <div className={styles.committeeMember}>
            <div className={styles.committeeMemberPicture}>
                <img className={styles.committeeMemberPic} src={props.picture} alt={props.name}/>
            </div>

            <div className={styles.committeeMemberInfo}>
                <h2 className={styles.memberName}>{props.name}</h2>
                <h4 className={styles.memberRole}>{props.socrole}</h4>
                <h4 className={styles.memberContact}>Contact on: {props.contacton}</h4>
                <h4 className={styles.memberDesc}>{props.shortdesc}</h4>
                <a href={"mailto:"+props.email}><h4 className={styles.memberEmail}>{props.email}</h4></a>
            </div>
        </div>
    )
}
//name={"Person PersonPerson"}
//role={"President"}
//contacton={"Events, Partnerships"}
//shortdesc={"A very short sentence about yourself. Maybe about this long?"}
//email={"0000000@brunel.ac.uk"}
//picture={