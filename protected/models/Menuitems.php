<?php



/**

 * This is the model class for table "menuitems".

 *

 * The followings are the available columns in table 'menuitems':

 * @property integer $id

 * @property string $entree

 * @property integer $menu_group_id

 */

class Menuitems extends CActiveRecord

{

	/**

	 * @return string the associated database table name

	 */

	public function tableName()

	{

		return 'menuitems';

	}



	/**

	 * @return array validation rules for model attributes.

	 */

	public function rules()

	{

		// NOTE: you should only define rules for those attributes that

		// will receive user inputs.

		return array(

			array('entree,descriptions,price, menu_group_id', 'required'),

			array('menu_group_id', 'numerical', 'integerOnly'=>true),

			// The following rule is used by search().

			// @todo Please remove those attributes that should not be searched.

			array('id, entree,descriptions,price, menu_group_id', 'safe', 'on'=>'search'),

		);

	}



	/**

	 * @return array relational rules.

	 */

	public function relations()

	{

		// NOTE: you may need to adjust the relation name and the related

		// class name for the relations automatically generated below.

		return array(

		'menugroup' => array(self::BELONGS_TO, 'Menugroups', 'menu_group_id'),

		);

	}



	/**

	 * @return array customized attribute labels (name=>label)

	 */

	public function attributeLabels()

	{

		return array(

			'id' => 'ID',

			'entree' => 'Entree',
			'descriptions' => 'Descriptions',
			'price' =>	'Price',
			'menu_group_id' => 'Menu Group',

		);

	}



	/**

	 * Retrieves a list of models based on the current search/filter conditions.

	 *

	 * Typical usecase:

	 * - Initialize the model fields with values from filter form.

	 * - Execute this method to get CActiveDataProvider instance which will filter

	 * models according to data in model fields.

	 * - Pass data provider to CGridView, CListView or any similar widget.

	 *

	 * @return CActiveDataProvider the data provider that can return the models

	 * based on the search/filter conditions.

	 */

	public function search()

	{

		// @todo Please modify the following code to remove attributes that should not be searched.



		$criteria=new CDbCriteria;



		$criteria->compare('id',$this->id);

		$criteria->compare('entree',$this->entree,true);
		
		$criteria->compare('descriptions',$this->descriptions,true);
		
		$criteria->compare('price',$this->price,true);
		
		$criteria->compare('menu_group_id',$this->menu_group_id);

		//$criteria->group=$this->menu_group_id;

		$criteria->order ='menu_group_id ASC';

		



		return new CActiveDataProvider($this, array(

			'criteria'=>$criteria,

		));

	}



	/**

	 * Returns the static model of the specified AR class.

	 * Please note that you should have this exact method in all your CActiveRecord descendants!

	 * @param string $className active record class name.

	 * @return Menuitems the static model class

	 */

	public static function model($className=__CLASS__)

	{

		return parent::model($className);

	}

}

