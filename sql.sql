CREATE TABLE Category (
  idCategory INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  member_family_idfamily INTEGER UNSIGNED NOT NULL,
  member_idmember INTEGER UNSIGNED NOT NULL,
  name VARCHAR(20) NULL,
  egress_type VARCHAR(8) NULL,
  PRIMARY KEY(idCategory),
  INDEX Category_FKIndex1(member_idmember, member_family_idfamily)
);

CREATE TABLE egress (
  idegress INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  member_idmember INTEGER UNSIGNED NOT NULL,
  Category_idCategory INTEGER UNSIGNED NOT NULL,
  member_family_idfamily INTEGER UNSIGNED NOT NULL,
  amount DOUBLE PRECISION NULL,
  date DATE NULL,
  PRIMARY KEY(idegress, member_idmember, Category_idCategory, member_family_idfamily),
  INDEX egress_FKIndex1(member_idmember, member_family_idfamily),
  INDEX egress_FKIndex2(Category_idCategory)
);

CREATE TABLE family (
  idfamily INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  family_name VARCHAR(25) NULL,
  members_quantity INTEGER UNSIGNED NULL,
  PRIMARY KEY(idfamily)
);

CREATE TABLE ingress (
  idingress INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  member_idmember INTEGER UNSIGNED NOT NULL,
  member_family_idfamily INTEGER UNSIGNED NOT NULL,
  amount DOUBLE PRECISION NULL,
  date DATE NULL,
  PRIMARY KEY(idingress, member_idmember, member_family_idfamily),
  INDEX ingress_FKIndex1(member_idmember, member_family_idfamily)
);

CREATE TABLE member (
  idmember INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  family_idfamily INTEGER UNSIGNED NOT NULL,
  login VARCHAR(15) NULL,
  pass VARCHAR(15) NULL,
  role INTEGER UNSIGNED NULL,
  PRIMARY KEY(idmember, family_idfamily),
  INDEX member_FKIndex1(family_idfamily)
);

CREATE TABLE regular_egress (
  idregular_egress INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  member_idmember INTEGER UNSIGNED NOT NULL,
  Category_idCategory INTEGER UNSIGNED NOT NULL,
  member_family_idfamily INTEGER UNSIGNED NOT NULL,
  amount DOUBLE NULL,
  day_to_pay INTEGER UNSIGNED NULL,
  description TEXT NULL,
  PRIMARY KEY(idregular_egress, member_idmember, Category_idCategory, member_family_idfamily),
  INDEX regular_egress_FKIndex1(member_idmember, member_family_idfamily),
  INDEX regular_egress_FKIndex2(Category_idCategory)
);


