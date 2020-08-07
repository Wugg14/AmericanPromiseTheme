<?php
/**
 * Template Name: Pledge Campaign Database
 * Description: Copy of index.php
 */

add_action( 'genesis_after_entry' , __NAMESPACE__ . '\custom_pledge_database_content' );

/**
 * Manages all helper functions for custom pledge content
 *
 * @since 1.0.11
 *
 * @return void
 */
function custom_pledge_database_content(){
    pledge_tabs_buttons();
    graphics_section();
    pledge_table_section();
};

/**
 * Buttons to control tabs
 *
 * @since 1.0.11
 *
 * @return void
 */
function pledge_tabs_buttons(){
    ?>
    <button id="graphics-tab" class="active-button pledge-database__button" style="margin-bottom: 5px;">Candidate and Elected Official Graphics</button><button id="databases-tab" class="pledge-database__button not-active-button" style="margin-bottom: 5px;">Candidate and Elected Official Database</button>
    <hr/>
    <br/>
    <?php
};

/**
 * Holds the shortcode for Pledge Graphic Album
 *
 * @since 1.0.11
 *
 * @return void
 */
function graphics_section(){
    ?>
    <div class="candidate-graphics">
        <div class="internal-custom__h1">
            <h1>
                See Some of the Many Candidates and Elected Officials Who Have Signed
            </h1>
        </div>
            <?php echo do_shortcode('[gallery size="large" media_category="8" sl_autoplay="true" sl_lazyload="anticipated" ids="5615,5616,5617,5671,5611,5619,5620,5622,5621,5623,3407,230,5679,236,238,3639,6041,4030,4291,4654,4781,4783,4931,5045,5052,5053,5054,5055,5126,5127,5128,5129,5153,5201,5205,5206,5207,5208,5280,5281,5290,5291,5495,5504,5505,5528,5604,5605,5696,5703,5772,5771,5770,5769,5760,5800,5812,5809,5810,5811,5843,5844,5845,5846,5847,5848,5849,5850,5851,5852,5877,5872,5873,5874,5870,5883,5884,5885,5887,5891,5892,5893,5894,5895,6401,5974,5897,5975,5976,5977,5978,5979,6044,5981,5982,5983,5984,6038,6039,6040,6042,6043,6167,6193,6194,6195,6297,6298,6299,6346,6347,6348,6349,6350,6351,6352,6353,6354,6355,6496,6398,6399,6425,6426,6427,6428,6429,6430,6431,6432,6433,6442,6443,6462,6463,6464,6465,6517,6518,6519,6520,6521,6522,6523,6524,6525,6526,6527,6528,6553"]'); ?>
        <p></p>
    </div>
    <?php
};

/**
 * Database Section, HTML code for the tables are created with Python Tools
 *
 * @since 1.0.11
 *
 * @return void
 */
function pledge_table_section(){
    ?>
    <div id="pledge-databases">
        <a name="database"></a>
        <div class="internal-custom__h1">
            <h1>Pledge Database</h1>
        </div>
        See all the candidates and office holders who have taken the pledge for the 28th Amendment, or signed with <em><a href="https://candidateswithacontract.com/">Candidates with a Contract</a></em>. You can search by Name, Office, or State, as well as sort each column alphabetically by clicking the column header. <br/>
    <div style="margin-top: 25px; margin-bottom: 25px;">
        <button id="pres" class="active-button pledge-database__button" style="margin-bottom: 5px;">2019/20 Congressional Candidates</button><button id="2019" class="pledge-database__button not-active-button" style="margin-bottom: 5px;">2019/20 State and Local Candidates</button><button id="2018" class="pledge-database__button not-active-button" style="margin-bottom: 5px;">2017/18 Candidates</button>
    </div>
        <br/>
        <div class="candidates-tables">
            <div id="table5_wrapper">
                <table id="table5" class="display cell-border hover stripe">
                    <thead>
                    <tr>
                        <th>Last</th>
                        <th>First</th>
                        <th>State</th>
                        <th>Office</th>
                        <th>District</th>
                        <th>Activity</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Tims</td>
                        <td>Desiree</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>10</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Wilson</td>
                        <td>Dave</td>
                        <td>WA</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Wilson</td>
                        <td>Dave</td>
                        <td>WA</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>


                    <tr>
                        <td>Bailey</td>
                        <td>Corey</td>
                        <td>WA</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Ross</td>
                        <td>Gena</td>
                        <td>MO</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Potter</td>
                        <td>Quentin</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Hassan</td>
                        <td>Ahmad R.</td>
                        <td>MN</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Olson</td>
                        <td>Kim</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>24</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Kahn</td>
                        <td>Kevin</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Schroder</td>
                        <td>Kate</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Castle</td>
                        <td>Jaime</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Musselwhite</td>
                        <td>Bob</td>
                        <td>AZ</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Walsingham</td>
                        <td>Blair</td>
                        <td>TN</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Khanna</td>
                        <td>Ro</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>17</td>
                        <td>Pledged Incumbent</td>
                    </tr>

                    <tr>
                        <td>Rood</td>
                        <td>Bill</td>
                        <td>MN</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Beardsley</td>
                        <td>Michael</td>
                        <td>WI</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Castaldo</td>
                        <td>Richie</td>
                        <td>OK</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Quilter</td>
                        <td>Peter</td>
                        <td>AZ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Williams</td>
                        <td>Vangie</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Zahradka</td>
                        <td>Tawnja</td>
                        <td>MN</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Starky</td>
                        <td>Stuart</td>
                        <td>AZ</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>DiSanto</td>
                        <td>Delina</td>
                        <td>AZ</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Anderson</td>
                        <td>Rob</td>
                        <td>LA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bohren</td>
                        <td>Jensen</td>
                        <td>MS</td>
                        <td>US Senate</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Burch</td>
                        <td>Lorie</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Casten</td>
                        <td>Sean</td>
                        <td>IL</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Cox</td>
                        <td>Steve</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>39</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Cunningham</td>
                        <td>William</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>DePaul</td>
                        <td>Monica</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Dingell</td>
                        <td>Debbie</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>12</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Duenas</td>
                        <td>Angelica</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>29</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Eastman</td>
                        <td>Kara</td>
                        <td>NE</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Fernandez</td>
                        <td>Veronica</td>
                        <td>NJ</td>
                        <td>US Senate</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Galbraith</td>
                        <td>Allison</td>
                        <td>MD</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Guild</td>
                        <td>Thomas</td>
                        <td>OK</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Haaland</td>
                        <td>Deb</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hoyos</td>
                        <td>Renee</td>
                        <td>TN</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kaptur</td>
                        <td>Marcy</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>9</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Kim</td>
                        <td>Andrew</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Kishineff</td>
                        <td>Jason</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Malinowski</td>
                        <td>Tom</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McCormick</td>
                        <td>Lisa</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>12</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McLeod-Skinner</td>
                        <td>Jamie</td>
                        <td>OR</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lax Miller</td>
                        <td>Loretta</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>15</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Pappas</td>
                        <td>Chris</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Porter</td>
                        <td>Steven</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Raskin</td>
                        <td>Jamie</td>
                        <td>MD</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Roberts</td>
                        <td>Shawna</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Shepherd</td>
                        <td>Rick</td>
                        <td>NV</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sherman</td>
                        <td>Jayesun</td>
                        <td>MN</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Van Drew</td>
                        <td>Jeff</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Young</td>
                        <td>Geoff</td>
                        <td>KY</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Freshour</td>
                        <td>Shannon</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Holden</td>
                        <td>David</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>19</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Ferguson</td>
                        <td>Dana</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Rubando</td>
                        <td>Nick</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Connolly</td>
                        <td>Gerry</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Incumbent</td>
                    </tr>

                    <tr>
                        <td>Mohsini</td>
                        <td>Zainab</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Brown</td>
                        <td>Chance</td>
                        <td>TN</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Marx</td>
                        <td>Bill</td>
                        <td>PA</td>
                        <td>US Representative</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Shearer</td>
                        <td>Alaina</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>12</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Sanchez</td>
                        <td>Joseph</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>


                    <tr>
                        <td>Christensen</td>
                        <td>Adam</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Blair</td>
                        <td>John</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lesinski</td>
                        <td>John</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Enoch</td>
                        <td>Vanessa</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Rashid</td>
                        <td>Qasim</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Serna</td>
                        <td>Marco</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Riggs Amico</td>
                        <td>Sarah</td>
                        <td>GA</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Belvin</td>
                        <td>Kenny</td>
                        <td>NY</td>
                        <td>US Representative</td>
                        <td>16</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Smith</td>
                        <td>Robert E.</td>
                        <td>MO</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hafner</td>
                        <td>Carol</td>
                        <td>WY</td>
                        <td>US Representative</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Dickinson</td>
                        <td>Jerry</td>
                        <td>PA</td>
                        <td>US Representative</td>
                        <td>18</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Putzova</td>
                        <td>Eva</td>
                        <td>AZ</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Treacy</td>
                        <td>Jonathan</td>
                        <td>ME</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McDowell</td>
                        <td>Jan</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>24</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Chick</td>
                        <td>Cameron</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Waters</td>
                        <td>Allen</td>
                        <td>RI</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Phillips</td>
                        <td>Dean</td>
                        <td>MN</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Haaland</td>
                        <td>Deb</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Nadler</td>
                        <td>Jerry</td>
                        <td>NY</td>
                        <td>US Representative</td>
                        <td>10</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Mcgovern</td>
                        <td>James</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Dodds</td>
                        <td>Philip</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Biggan</td>
                        <td>John</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>24</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Larsen</td>
                        <td>Mike</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Tisdel</td>
                        <td>Kyle</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McCaffity</td>
                        <td>Sean</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kaptur</td>
                        <td>Marcy</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>9</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Seikaly</td>
                        <td>Lulu</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Montoya</td>
                        <td>Harry</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Beyer</td>
                        <td>Don</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Montoya</td>
                        <td>Laura</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gabbard</td>
                        <td>Tulsi</td>
                        <td>HI</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Klobuchar</td>
                        <td>Amy</td>
                        <td>MN</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Bennet</td>
                        <td>Michael</td>
                        <td>CO</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Sanders</td>
                        <td>Bernie</td>
                        <td>VT</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Warren</td>
                        <td>Elizabeth</td>
                        <td>MA</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Ryan</td>
                        <td>Tim</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>13</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Bullock</td>
                        <td>Steve</td>
                        <td>MT</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Harris</td>
                        <td>Kamala</td>
                        <td>CA</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Gillibrand</td>
                        <td>Kristen</td>
                        <td>NY</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Valenzuela</td>
                        <td>Candace</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>24</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="table2_wrapper">
                <table id="table2" class="cell-border hover stripe">
                    <thead>
                    <tr>
                        <th>Last</th>
                        <th>First</th>
                        <th>State</th>
                        <th>Office</th>
                        <th>District</th>
                        <th>Activity</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Crockett</td>
                        <td>Jasmine</td>
                        <td>TX</td>
                        <td>State Representative</td>
                        <td>100</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Sharp</td>
                        <td>Catia</td>
                        <td>MA</td>
                        <td>State Representative</td>
                        <td>27th Middlesex</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Stanley</td>
                        <td>Chris</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>59</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Brady</td>
                        <td>Gerald</td>
                        <td>DE</td>
                        <td>State Representative</td>
                        <td>4</td>
                        <td>Pledged Incumbent</td>
                    </tr>

                    <tr>
                        <td>Maffeo</td>
                        <td>Michael</td>
                        <td>NY</td>
                        <td>Staten Island Borough President</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lee</td>
                        <td>Jeff</td>
                        <td>CA</td>
                        <td>Grover Beach Mayor</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Highberger</td>
                        <td>Dennis "boog"</td>
                        <td>KS</td>
                        <td>State Representative</td>
                        <td>46</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Peterson</td>
                        <td>Kimberly</td>
                        <td>TN</td>
                        <td>Knox County Commissioner</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Fogel</td>
                        <td>Mark</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Yamamoto Hanson</td>
                        <td>Rebecca</td>
                        <td>ID</td>
                        <td>State Representative</td>
                        <td>10</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lambert</td>
                        <td>Larry</td>
                        <td>DE</td>
                        <td>State Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bruns</td>
                        <td>Matt</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>21A</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kimmel</td>
                        <td>Marinda “Mindy”</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>16B</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Calhoun</td>
                        <td>Tamara 'Tami'</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>14A</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Durrett</td>
                        <td>Courtney</td>
                        <td>TN</td>
                        <td>Knox County Commissioner</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Frommeyer</td>
                        <td>Todd</td>
                        <td>TN</td>
                        <td>Knox County Commissioner</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Sizemore</td>
                        <td>Paddy</td>
                        <td>TN</td>
                        <td>State Representative</td>
                        <td>40</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Ward</td>
                        <td>Kyle</td>
                        <td>TN</td>
                        <td>Knox County Commissioner</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Cardarelle</td>
                        <td>Renee</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>29A</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Prine</td>
                        <td>Joshua</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>16</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Putnam</td>
                        <td>Aric</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kinzelman</td>
                        <td>Paul</td>
                        <td>NM</td>
                        <td>State Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Brinkmeier</td>
                        <td>Arlan</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>47A</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kovach</td>
                        <td>Brad</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>30B</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Peard</td>
                        <td>Billy</td>
                        <td>AZ</td>
                        <td>State Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Day-Achauer</td>
                        <td>Nancy</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>23</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Malsom</td>
                        <td>Doug</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>38A</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Cwodzinski</td>
                        <td>Steve</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>48</td>
                        <td>Pledged Incumbent</td>
                    </tr>

                    <tr>
                        <td>Maestas-Condos</td>
                        <td>Ronnie</td>
                        <td>AZ</td>
                        <td>State Representative</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Nelson</td>
                        <td>David L.</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>35</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Stofferahn</td>
                        <td>Justin</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>38</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Jermaine</td>
                        <td>Jennifer</td>
                        <td>AZ</td>
                        <td>State Representative</td>
                        <td>18</td>
                        <td>Pledged Incumbent</td>
                    </tr>

                    <tr>
                        <td>Bahner</td>
                        <td>Kristin</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>34B</td>
                        <td>Pledged Incumbent</td>
                    </tr>

                    <tr>
                        <td>Shober</td>
                        <td>Harlan</td>
                        <td>PA</td>
                        <td>State Representative</td>
                        <td>48</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Flick</td>
                        <td>Sara</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>25</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Rosh</td>
                        <td>Joe</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>29B</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Funk</td>
                        <td>Thomas</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>47</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Sachs</td>
                        <td>Melanie</td>
                        <td>ME</td>
                        <td>State Representative</td>
                        <td>48</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Adair</td>
                        <td>Tom</td>
                        <td>TX</td>
                        <td>State Representative</td>
                        <td>67</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Ulrick</td>
                        <td>John</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>15B</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Tucker</td>
                        <td>Richard</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>56</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Isse</td>
                        <td>Suleiman</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>59</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Erickson</td>
                        <td>Mike</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>35A</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Evans</td>
                        <td>Jerome</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>63B</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Drost</td>
                        <td>Doria</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>16A</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Wilson</td>
                        <td>Myron</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>15B</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Hoffner</td>
                        <td>Kyra</td>
                        <td>DE</td>
                        <td>State Senator</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Wiester</td>
                        <td>David</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>63A</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Clark</td>
                        <td>Jay</td>
                        <td>TN</td>
                        <td>State Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Aniano</td>
                        <td>Jennifer</td>
                        <td>MI</td>
                        <td>Kalamazoo County Commissioner</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Starzyk</td>
                        <td>Ryan</td>
                        <td>AZ</td>
                        <td>State Senator</td>
                        <td>24</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Kritzell</td>
                        <td>Melissa</td>
                        <td>OH</td>
                        <td>Hancock County Commissioner</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>George</td>
                        <td>Jane</td>
                        <td>TN</td>
                        <td>State Senator</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Bounds</td>
                        <td>Patti</td>
                        <td>TN</td>
                        <td>State Representative</td>
                        <td>16</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Briggs</td>
                        <td>Richard</td>
                        <td>TN</td>
                        <td>State Senator</td>
                        <td>7</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Maluchnik</td>
                        <td>Randy</td>
                        <td>MN</td>
                        <td>Carver County Commissioner</td>
                        <td>3</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Park</td>
                        <td>Matthew</td>
                        <td>TN</td>
                        <td>State Representative</td>
                        <td>15</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Daley</td>
                        <td>Mary Jo</td>
                        <td>PA</td>
                        <td>State Representative</td>
                        <td>148</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gucker</td>
                        <td>Ken</td>
                        <td>CT</td>
                        <td>State Representative</td>
                        <td>138</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Guidi</td>
                        <td>Sharon</td>
                        <td>PA</td>
                        <td>State Representative</td>
                        <td>40</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Legrand</td>
                        <td>Terri</td>
                        <td>NC</td>
                        <td>State Representative</td>
                        <td>74</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Peterson</td>
                        <td>Robbie</td>
                        <td>MI</td>
                        <td>State Representative</td>
                        <td>54</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Rabhi</td>
                        <td>Yousef</td>
                        <td>MI</td>
                        <td>State Representative</td>
                        <td>53</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Schiller</td>
                        <td>Jill</td>
                        <td>OH</td>
                        <td>Hamilton County Treasurer</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Vaughn</td>
                        <td>Rikki</td>
                        <td>MD</td>
                        <td>Mayor of Baltimore</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Woods</td>
                        <td>Dan</td>
                        <td>TX</td>
                        <td>Court of Appeals</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Miller</td>
                        <td>Addie</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>47</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Wilde</td>
                        <td>Melissa</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>77</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sneed</td>
                        <td>Susan</td>
                        <td>TN</td>
                        <td>State Representative</td>
                        <td>20</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lawrence</td>
                        <td>Wesley</td>
                        <td>TX</td>
                        <td>El Paso City Council</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Morrison</td>
                        <td>Eric</td>
                        <td>DE</td>
                        <td>State Representative</td>
                        <td>27</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Barnes</td>
                        <td>Nick</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>87</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Trujillo</td>
                        <td>Linda</td>
                        <td>NM</td>
                        <td>State Representative</td>
                        <td>48</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Stewart</td>
                        <td>Ann Johnson</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>44</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Piper</td>
                        <td>Gretchen</td>
                        <td>MN</td>
                        <td>State Senator</td>
                        <td>33</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Davis</td>
                        <td>Justin</td>
                        <td>TN</td>
                        <td>State Representative</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Miner</td>
                        <td>Kristie</td>
                        <td>ME</td>
                        <td>State Senator</td>
                        <td>9</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Beheydt</td>
                        <td>Donna</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>69</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Hughes</td>
                        <td>Hank</td>
                        <td>NM</td>
                        <td>Santa Fe County Comissioner</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Adkison</td>
                        <td>Dara</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>57</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Rader</td>
                        <td>Betsy</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>18</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Dudziak</td>
                        <td>Adam</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>61</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Marton</td>
                        <td>Janos</td>
                        <td>NY</td>
                        <td>Manhattan District Attorney</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Workman</td>
                        <td>Beth</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>92</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>McCarthy</td>
                        <td>Kim</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>73</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Biberstein</td>
                        <td>Kathy</td>
                        <td>ME</td>
                        <td>State Representative</td>
                        <td>48</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Ottney</td>
                        <td>Ryan</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Westhoven</td>
                        <td>Garrett</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>76</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Wyenandt</td>
                        <td>Kathy</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Novak</td>
                        <td>Michelle</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>53</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Stair</td>
                        <td>Rebecca "Puck"</td>
                        <td>NM</td>
                        <td>State Senator</td>
                        <td>17</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Cahill</td>
                        <td>Caitlin</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>33A</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Swope</td>
                        <td>Alaina</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>97</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Helmer</td>
                        <td>Dan</td>
                        <td>VA</td>
                        <td>State Delegate</td>
                        <td>40</td>
                        <td>Pledged Incumbent</td>
                    </tr>

                    <tr>
                        <td>Cox</td>
                        <td>Amy</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>43</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Darnowsky</td>
                        <td>Alan</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>65</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Carr</td>
                        <td>Mark</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>71</td>
                        <td>Pledged Candidate</td>
                    </tr>

                    <tr>
                        <td>Rosiello</td>
                        <td>Erin</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>62</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Morrison</td>
                        <td>Kelly</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>33B</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Long</td>
                        <td>Cleon</td>
                        <td>MI</td>
                        <td>Newport News City Council</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gurian</td>
                        <td>Hal</td>
                        <td>MI</td>
                        <td>Grand Traverse County Comissioner</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Fuqua</td>
                        <td>Scott</td>
                        <td>NM</td>
                        <td>District Attorney</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Carmack-Altwies</td>
                        <td>Mary</td>
                        <td>NM</td>
                        <td>District Attorney</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Harris</td>
                        <td>Brian</td>
                        <td>NM</td>
                        <td>Public Regulation Commission</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Taeb</td>
                        <td>Yasmine</td>
                        <td>VA</td>
                        <td>State Senator</td>
                        <td>35</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Iovino</td>
                        <td>Pam</td>
                        <td>PA</td>
                        <td>State Senator</td>
                        <td>37</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Liston</td>
                        <td>Beth</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>21</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Brixie</td>
                        <td>Julie</td>
                        <td>MI</td>
                        <td>State Representative</td>
                        <td>69</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Funderburk</td>
                        <td>Danny</td>
                        <td>VA</td>
                        <td>Prince William County Board of Supervisors</td>
                        <td>Gainesville Seat</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Cox</td>
                        <td>Matt</td>
                        <td>NC</td>
                        <td>State Senator</td>
                        <td>18</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Tobe</td>
                        <td>Christopher</td>
                        <td>KY</td>
                        <td>State Auditor</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Toulouse-Oliver</td>
                        <td>Maggie</td>
                        <td>NM</td>
                        <td>Secretary of State</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>deGruy</td>
                        <td>Kyra</td>
                        <td>CO</td>
                        <td>Lakewood City Council</td>
                        <td>Ward 1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Arreguin</td>
                        <td>Jesse</td>
                        <td>CA</td>
                        <td>Mayor of Berkeley</td>
                        <td></td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Harrison</td>
                        <td>Kate</td>
                        <td>CA</td>
                        <td>Berkeley, CA City Council</td>
                        <td>4</td>
                        <td>Pledged Incumbent</td>
                    </tr>

                    <tr>
                        <td>Grays</td>
                        <td>Tiffany</td>
                        <td>CO</td>
                        <td>Mayor of Aurora</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Wilson-Anton</td>
                        <td>Madinah</td>
                        <td>DE</td>
                        <td>State Representative</td>
                        <td>26</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Riddell</td>
                        <td>Steve</td>
                        <td>TX</td>
                        <td>State Representative</td>
                        <td>92</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hansen</td>
                        <td>Anna</td>
                        <td>NM</td>
                        <td>Santa Fe County Comissioner</td>
                        <td>2</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Edmondson</td>
                        <td>Debra</td>
                        <td>TX</td>
                        <td>State Representative</td>
                        <td>98</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lo</td>
                        <td>Anthony</td>
                        <td>TX</td>
                        <td>State Representative</td>
                        <td>67</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sanchez</td>
                        <td>Lorenzo</td>
                        <td>TX</td>
                        <td>State Representative</td>
                        <td>67</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Maestas</td>
                        <td>Joseph</td>
                        <td>NM</td>
                        <td>Public Regulation Commission</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lane</td>
                        <td>Abbie</td>
                        <td>NC</td>
                        <td>State Representative</td>
                        <td>23</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Braatz</td>
                        <td>Kathy</td>
                        <td>TX</td>
                        <td>Tarrant County Commissioner</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Connelly</td>
                        <td>Eric</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>16</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Miller</td>
                        <td>Alexis</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>89</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>O’Dorisio</td>
                        <td>Joel</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Stepp</td>
                        <td>Zach</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>55</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Subei</td>
                        <td>Reem</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sweda</td>
                        <td>Sharon</td>
                        <td>OH</td>
                        <td>Lorain County Commissioner</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Ash</td>
                        <td>Ray</td>
                        <td>TX</td>
                        <td>State Representative</td>
                        <td>89</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lett</td>
                        <td>Crystal</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>16</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Eryin</td>
                        <td>Tom</td>
                        <td>TX</td>
                        <td>State Representative</td>
                        <td>108</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sheehey</td>
                        <td>Pete</td>
                        <td>NM</td>
                        <td>Los Alamos County Councilor</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Armbruster</td>
                        <td>Karyl Ann</td>
                        <td>NM</td>
                        <td>Public Education Commission</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Larson</td>
                        <td>Nancy</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>47</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hoffman</td>
                        <td>Jeff</td>
                        <td>MN</td>
                        <td>City of Spring Park Council Member</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Guzman</td>
                        <td>Sarah</td>
                        <td>NM</td>
                        <td>Santa Fe County Clerk</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Clark</td>
                        <td>Katharine</td>
                        <td>NM</td>
                        <td>Santa Fe County Clerk</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Cervantes</td>
                        <td>Joe</td>
                        <td>NM</td>
                        <td>State Senator</td>
                        <td>31</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Ortiz y Pino</td>
                        <td>Gerald</td>
                        <td>NM</td>
                        <td>State Senator</td>
                        <td>12</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Romero</td>
                        <td>Andrea</td>
                        <td>NM</td>
                        <td>State Representative</td>
                        <td>46</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Gillman</td>
                        <td>Beth</td>
                        <td>OH</td>
                        <td>Ottawa County Recorder</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="table1_wrapper">
                <table id="table1" class="cell-border hover stripe">
                    <thead>
                    <tr>
                        <th>Last</th>
                        <th>First</th>
                        <th>State</th>
                        <th>Office</th>
                        <th>District</th>
                        <th>Activity</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>Abboud</td>
                        <td>Deedra</td>
                        <td>AZ</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Adams</td>
                        <td>Dion</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Akhil</td>
                        <td>Abbas</td>
                        <td>NM</td>
                        <td>State Representative</td>
                        <td>20</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Akzam</td>
                        <td>Johnny</td>
                        <td>MN</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Alemayhu</td>
                        <td>Ted</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>37</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Alli</td>
                        <td>Helen</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Anderson</td>
                        <td>Rob</td>
                        <td>LA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Andrews</td>
                        <td>Naomi</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Apodaca</td>
                        <td>Jeff</td>
                        <td>NM</td>
                        <td>Governor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Apple</td>
                        <td>Winston</td>
                        <td>MO</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Applewhite</td>
                        <td>Jarratt</td>
                        <td>NM</td>
                        <td>State Representative</td>
                        <td>50</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Asciutto</td>
                        <td>Audrey</td>
                        <td>FL</td>
                        <td>State Representative</td>
                        <td>55</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Athey</td>
                        <td>Ted</td>
                        <td>MD</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Auman</td>
                        <td>Lee</td>
                        <td>AL</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Ballinger</td>
                        <td>Jeff</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bardoe</td>
                        <td>Angela</td>
                        <td>NJ</td>
                        <td>Pittsgrove Township Committee</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Barrett</td>
                        <td>Michael</td>
                        <td>MA</td>
                        <td>State Senator</td>
                        <td>3rd Middlesex</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Bassett</td>
                        <td>Michael</td>
                        <td>OH</td>
                        <td>Ottawa County Commissioner</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Beach</td>
                        <td>Craig</td>
                        <td>MI</td>
                        <td>State Senator</td>
                        <td>28</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Belanger</td>
                        <td>Brian</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Benac</td>
                        <td>David</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Benfer</td>
                        <td>William</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bennett Parker</td>
                        <td>Elizabeth</td>
                        <td>VA</td>
                        <td>Alexandria City Councillor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Berringer</td>
                        <td>Aryanna</td>
                        <td>PA</td>
                        <td>Lt. Governor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bequette</td>
                        <td>David</td>
                        <td>IL</td>
                        <td>US Representative</td>
                        <td>12</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bignell</td>
                        <td>Mark</td>
                        <td>MI</td>
                        <td>State Senator</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bishop</td>
                        <td>Ron</td>
                        <td>AL</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bloomenthal</td>
                        <td>Benjamin</td>
                        <td>MA</td>
                        <td>State Representative</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Boatner</td>
                        <td>John</td>
                        <td>TN</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bohren</td>
                        <td>Jensen</td>
                        <td>MS</td>
                        <td>US Senator</td>
                        <td></td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Borrelli</td>
                        <td>Tamborine</td>
                        <td>WA</td>
                        <td>US Representative</td>
                        <td>10</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Brown</td>
                        <td>Lindsay</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Bump</td>
                        <td>Suzanne</td>
                        <td>MA</td>
                        <td>State Auditor</td>
                        <td>0</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Burch</td>
                        <td>Lorie</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Campagna</td>
                        <td>Sherry</td>
                        <td>HI</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Canova</td>
                        <td>Tim</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>23</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Carey</td>
                        <td>Pete</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Casten</td>
                        <td>Sean</td>
                        <td>IL</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Cervantes</td>
                        <td>Joe</td>
                        <td>NM</td>
                        <td>Governor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Chamberlin</td>
                        <td>Chris</td>
                        <td>MN</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Chandler</td>
                        <td>Alexandra</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Chatlos</td>
                        <td>Robert</td>
                        <td>IN</td>
                        <td>US Representative</td>
                        <td>9</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Clemens</td>
                        <td>Jodi</td>
                        <td>IA</td>
                        <td>State Representative</td>
                        <td>73</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Clemens</td>
                        <td>Wesley</td>
                        <td>IA</td>
                        <td>Supervisor</td>
                        <td>Cedar County</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Cox</td>
                        <td>David</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>19</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Cox</td>
                        <td>Steve</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>39</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Crary</td>
                        <td>Jim</td>
                        <td>OR</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Crooks</td>
                        <td>Rachel</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>88</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Cunningham</td>
                        <td>William</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Daley</td>
                        <td>Mary Jo</td>
                        <td>PA</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Das</td>
                        <td>Beej</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Davidson</td>
                        <td>Demarco</td>
                        <td>MO</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Davis</td>
                        <td>Adam</td>
                        <td>UT</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Davis</td>
                        <td>Justin</td>
                        <td>TN</td>
                        <td>State Representative</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Dean</td>
                        <td>Sarah</td>
                        <td>MT</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>DeBenedittis</td>
                        <td>Peter</td>
                        <td>NM</td>
                        <td>Governor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>DePaul</td>
                        <td>Monica</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Devito</td>
                        <td>Michael</td>
                        <td>NY</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Dewitt</td>
                        <td>Justin</td>
                        <td>LA</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Dilks</td>
                        <td>Paul</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Dingell</td>
                        <td>Debbie</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>12</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Duenas</td>
                        <td>Angelica</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>29</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Earl</td>
                        <td>Angelica</td>
                        <td>MO</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Eastman</td>
                        <td>Kara</td>
                        <td>NE</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Eichholz</td>
                        <td>Rich</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Elder</td>
                        <td>Pat</td>
                        <td>MD</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Enoch</td>
                        <td>Vanessa</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Everhard</td>
                        <td>Janet</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Faust</td>
                        <td>David</td>
                        <td>MO</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Ferguson</td>
                        <td>Jennifer Gigi</td>
                        <td>WA</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Fernandez</td>
                        <td>Veronica</td>
                        <td>NJ</td>
                        <td>Washington Township Committee</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Frame</td>
                        <td>Eric</td>
                        <td>CA</td>
                        <td>State Senator</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Fraser</td>
                        <td>Diane</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Friedman</td>
                        <td>Cindy</td>
                        <td>MA</td>
                        <td>State Senator</td>
                        <td>4th Middlesex</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Frend</td>
                        <td>Michael</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>Steven</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Friedenberg</td>
                        <td>Marc</td>
                        <td>PA</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Fields</td>
                        <td>Vernon</td>
                        <td>KS</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Fulford</td>
                        <td>Jonathan</td>
                        <td>ME</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Galbraith</td>
                        <td>Michael</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Galbraith</td>
                        <td>Allison</td>
                        <td>MD</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Garcia</td>
                        <td>Ramon</td>
                        <td>WI</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Garret</td>
                        <td>Janet</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Garrod</td>
                        <td>Eponine</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Georges</td>
                        <td>Tom</td>
                        <td>IL</td>
                        <td>State Senator</td>
                        <td>26</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Germanotta</td>
                        <td>Juliet</td>
                        <td>WI</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gifford</td>
                        <td>Rufus</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gill</td>
                        <td>David</td>
                        <td>IL</td>
                        <td>US Representative</td>
                        <td>13</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gillum</td>
                        <td>Andrew</td>
                        <td>FL</td>
                        <td>Governor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gonzalez</td>
                        <td>Jay</td>
                        <td>MA</td>
                        <td>Governor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gonzalez</td>
                        <td>Guillermina</td>
                        <td>DE</td>
                        <td>State Representative</td>
                        <td>22</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gouveia</td>
                        <td>Tami</td>
                        <td>MA</td>
                        <td>State Representative</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Greenhill</td>
                        <td>Kip</td>
                        <td>OH</td>
                        <td>Mayor of Upper Arlington</td>
                        <td>0</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Griffin</td>
                        <td>Clayburn</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Gucker</td>
                        <td>Kenneth</td>
                        <td>CT</td>
                        <td>State Representative</td>
                        <td>138</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Guidi</td>
                        <td>Sharon</td>
                        <td>PA</td>
                        <td>State Representative</td>
                        <td>40</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Guild</td>
                        <td>Thomas</td>
                        <td>OK</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Haaland</td>
                        <td>Deb</td>
                        <td>NM</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hafner</td>
                        <td>Carol "Kitty"</td>
                        <td>AK</td>
                        <td>US Representative</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hafner</td>
                        <td>Eric</td>
                        <td>OR</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hall</td>
                        <td>Seth</td>
                        <td>KY</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hansen</td>
                        <td>Anna</td>
                        <td>NM</td>
                        <td>Santa Fe County Commissioner</td>
                        <td>2</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Harris</td>
                        <td>Kerri Evelyn</td>
                        <td>DE</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hartford</td>
                        <td>Andrew</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>12</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hartson</td>
                        <td>Alison</td>
                        <td>CA</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Helle</td>
                        <td>Joe</td>
                        <td>OH</td>
                        <td>State Representative</td>
                        <td>89</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Henry</td>
                        <td>Brendon</td>
                        <td>NY</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hewitt</td>
                        <td>Martin</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hoagenson</td>
                        <td>Renee</td>
                        <td>MO</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hoyos</td>
                        <td>Renee</td>
                        <td>TN</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hildebrand</td>
                        <td>David</td>
                        <td>CA</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Huffman</td>
                        <td>Ryan</td>
                        <td>IL</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Hunziker</td>
                        <td>Robert</td>
                        <td>WA</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Ing</td>
                        <td>Kaniela</td>
                        <td>HI</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Jacob</td>
                        <td>Peter</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Janowski</td>
                        <td>Ed</td>
                        <td>FL</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Jaramillo</td>
                        <td>Mary Jo</td>
                        <td>NM</td>
                        <td>State Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Jeanette</td>
                        <td>Ryan</td>
                        <td>MI</td>
                        <td>State Senator</td>
                        <td>28</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Jennings</td>
                        <td>Vince</td>
                        <td>MO</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Joshi</td>
                        <td>Yatish</td>
                        <td>IN</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kaptur</td>
                        <td>Marcy</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>9</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Kim</td>
                        <td>Andy</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kim</td>
                        <td>Bryan</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>53</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kishineff</td>
                        <td>Jason</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kleinman</td>
                        <td>Nate</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Koh</td>
                        <td>Dan</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kovacs</td>
                        <td>Billy</td>
                        <td>AZ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Kresge</td>
                        <td>Brian</td>
                        <td>ME</td>
                        <td>State Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>LaBarre</td>
                        <td>Andy</td>
                        <td>MI</td>
                        <td>Washtenaw County Board of Commissioner</td>
                        <td>0</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Lavine</td>
                        <td>Ben</td>
                        <td>OR</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Leonard</td>
                        <td>Robbie</td>
                        <td>MD</td>
                        <td>State Representative</td>
                        <td>42</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Littlefield</td>
                        <td>Patrick</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Longjohn</td>
                        <td>Matt</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lord</td>
                        <td>Christina</td>
                        <td>KY</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Love</td>
                        <td>Jack</td>
                        <td>NV</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>LeGrand</td>
                        <td>Terri</td>
                        <td>NC</td>
                        <td>State Representative</td>
                        <td>74</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Leiner</td>
                        <td>Bill</td>
                        <td>PA</td>
                        <td>US Representative</td>
                        <td>15</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lyons</td>
                        <td>Chris</td>
                        <td>ME</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Lytton</td>
                        <td>Dennis</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>L'Italien</td>
                        <td>Barbara</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Mackenzie</td>
                        <td>Mark</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Malinowski</td>
                        <td>Tom</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Malloy</td>
                        <td>Patrick</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>50</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Malone</td>
                        <td>Bopha</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Marrow</td>
                        <td>Greg</td>
                        <td>NH</td>
                        <td>State Representative</td>
                        <td>Rockingham-20</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Marshall</td>
                        <td>Jennifer</td>
                        <td>NC</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Martin</td>
                        <td>Jenica</td>
                        <td>MD</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Martin</td>
                        <td>William</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Martinez</td>
                        <td>Coleen</td>
                        <td>TN</td>
                        <td>State Representative</td>
                        <td>89</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Massie</td>
                        <td>Bob</td>
                        <td>MA</td>
                        <td>Governor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Matias</td>
                        <td>Juana</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>May</td>
                        <td>Wendy</td>
                        <td>NC</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McBrine</td>
                        <td>Katie</td>
                        <td>MA</td>
                        <td>State Senator</td>
                        <td>Plymouth and Norfolk</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McCamon</td>
                        <td>Mike</td>
                        <td>KS</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McCormick</td>
                        <td>Lisa</td>
                        <td>NJ</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McEachern</td>
                        <td>Deaglan</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McGovern</td>
                        <td>Jim</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>McLeod-Skinner</td>
                        <td>Jamie</td>
                        <td>OR</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>McQueen</td>
                        <td>Lee</td>
                        <td>AR</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Messmer</td>
                        <td>John</td>
                        <td>MO</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Messmer</td>
                        <td>Mindi</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Michaels</td>
                        <td>Freeman</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>52</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Miller</td>
                        <td>Loretta Lax</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>15</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Moreno</td>
                        <td>Ed</td>
                        <td>NM</td>
                        <td>Santa Fe County Commissioner</td>
                        <td>5</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Mullen</td>
                        <td>Mike</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Mumin</td>
                        <td>Khalil Abdul</td>
                        <td>MO</td>
                        <td>State Representative</td>
                        <td>66</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Musser-Lopez</td>
                        <td>Ruth</td>
                        <td>CA</td>
                        <td>State Senator</td>
                        <td>16</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Nadler</td>
                        <td>Jerry</td>
                        <td>NY</td>
                        <td>US Representative</td>
                        <td>10</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Neal</td>
                        <td>Rick</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>15</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Nesmith</td>
                        <td>Trent</td>
                        <td>GA</td>
                        <td>US Representative</td>
                        <td>12</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Neu Jr</td>
                        <td>James</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Nichols</td>
                        <td>Damien</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>28</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Noble</td>
                        <td>Jason</td>
                        <td>MI</td>
                        <td>State Senator</td>
                        <td>19</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Nordquist</td>
                        <td>Heather</td>
                        <td>NM</td>
                        <td>State Representative</td>
                        <td>46</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Nye</td>
                        <td>Cooper</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Ortiz y Pino</td>
                        <td>Jerry</td>
                        <td>NM</td>
                        <td>State Senator</td>
                        <td>12</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>O'Rourke</td>
                        <td>Terence</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Osmack</td>
                        <td>Mark</td>
                        <td>MO</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Painter</td>
                        <td>Richard</td>
                        <td>MN</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Palfrey</td>
                        <td>Quentin</td>
                        <td>MA</td>
                        <td>Lt. Governor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Palsson</td>
                        <td>Nils</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Pappas</td>
                        <td>Chris</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Parisi Sanchez</td>
                        <td>Anthony</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Perri</td>
                        <td>Chris</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>25</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Peterson</td>
                        <td>Ronnie</td>
                        <td>MI</td>
                        <td>State Representative</td>
                        <td>54</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Peyer</td>
                        <td>Dustin</td>
                        <td>ND</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Phillips</td>
                        <td>Dean</td>
                        <td>MN</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Pollard</td>
                        <td>Bill</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>17</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Porter</td>
                        <td>Stevan</td>
                        <td>VA</td>
                        <td>US Representative</td>
                        <td>11</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Prigg</td>
                        <td>Tom</td>
                        <td>PA</td>
                        <td>US Representative</td>
                        <td>12</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Pureval</td>
                        <td>Aftab</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Rabhi</td>
                        <td>Yousef</td>
                        <td>MI</td>
                        <td>State Representative</td>
                        <td>53</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Raskin</td>
                        <td>Jamie</td>
                        <td>MD</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Reed</td>
                        <td>Stuart</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>23</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Reed</td>
                        <td>Wendy</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>23</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Reilly</td>
                        <td>Steve</td>
                        <td>GA</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Roberts</td>
                        <td>Shawna</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Romero</td>
                        <td>Andrea</td>
                        <td>NM</td>
                        <td>State Representative</td>
                        <td>46</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Ronan</td>
                        <td>Sam</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Rosen Gonzalez</td>
                        <td>Kristen</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>27</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Rosser</td>
                        <td>Brian</td>
                        <td>GA</td>
                        <td>State Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sagliano</td>
                        <td>Vito</td>
                        <td>TN</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sanders</td>
                        <td>Levi</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Saturn</td>
                        <td>Andrew</td>
                        <td>WA</td>
                        <td>Public Utility District Commissioner</td>
                        <td>Thurston County</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sayegh</td>
                        <td>Roger</td>
                        <td>CA</td>
                        <td>State Senator</td>
                        <td>18</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Schiller</td>
                        <td>Jill</td>
                        <td>OH</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Schneider</td>
                        <td>Jan</td>
                        <td>FL</td>
                        <td>US Representative</td>
                        <td>16</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Schrimers</td>
                        <td>Ben</td>
                        <td>MN</td>
                        <td>State Representative</td>
                        <td>12B</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sedbrook</td>
                        <td>David</td>
                        <td>CO</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Seifeldin</td>
                        <td>Mo</td>
                        <td>VA</td>
                        <td>Alexandria City Councillor</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Shakti</td>
                        <td>Shakti</td>
                        <td>CO</td>
                        <td>State Representative</td>
                        <td>28</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Shepherd</td>
                        <td>Rick</td>
                        <td>NV</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sherman</td>
                        <td>Jayesun</td>
                        <td>MN</td>
                        <td>US Representative</td>
                        <td>7</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Short</td>
                        <td>Grant</td>
                        <td>KY</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Singleton</td>
                        <td>Philip</td>
                        <td>GA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Skopov</td>
                        <td>Emily</td>
                        <td>PA</td>
                        <td>State Representative</td>
                        <td>28</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Soldati</td>
                        <td>Lincoln</td>
                        <td>NH</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Spencer</td>
                        <td>Paul</td>
                        <td>AR</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Spoerer</td>
                        <td>Carl</td>
                        <td>IL</td>
                        <td>US Representative</td>
                        <td>15</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Squier</td>
                        <td>Marcia</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Stanger</td>
                        <td>Erik</td>
                        <td>CO</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Stankevich</td>
                        <td>Nicholas</td>
                        <td>NY</td>
                        <td>US Representative</td>
                        <td>27</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Stevenson</td>
                        <td>Rich</td>
                        <td>KY</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Strauss</td>
                        <td>Jean</td>
                        <td>MA</td>
                        <td>State Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>St. John</td>
                        <td>Keith</td>
                        <td>MA</td>
                        <td>US Representative</td>
                        <td>3</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sullivan</td>
                        <td>Peter</td>
                        <td>NH</td>
                        <td>Secretary of State</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Sweda</td>
                        <td>Sharon</td>
                        <td>OH</td>
                        <td>State Senator</td>
                        <td>13</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Theodoropoulos</td>
                        <td>Demitri</td>
                        <td>DE</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Thom</td>
                        <td>Sean</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Thomas</td>
                        <td>Jared</td>
                        <td>IN</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Thomas</td>
                        <td>Nick</td>
                        <td>CO</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Thorn</td>
                        <td>Gabriel</td>
                        <td>CO</td>
                        <td>State Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Toulouse Oliver</td>
                        <td>Maggie</td>
                        <td>NM</td>
                        <td>Secretary of State</td>
                        <td>0</td>
                        <td>Pledged Incumbent</td>
                    </tr>
                    <tr>
                        <td>Trauner</td>
                        <td>Gary</td>
                        <td>WY</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Trundle</td>
                        <td>Ryan</td>
                        <td>LA</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Van Drew</td>
                        <td>Jeff</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Vaughn</td>
                        <td>Rikki</td>
                        <td>MD</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Vilela</td>
                        <td>Amy</td>
                        <td>NV</td>
                        <td>US Representative</td>
                        <td>4</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Walker</td>
                        <td>Tami</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>10</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Wallace</td>
                        <td>Scott</td>
                        <td>PA</td>
                        <td>US Representative</td>
                        <td>1</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Walz</td>
                        <td>Jim</td>
                        <td>IL</td>
                        <td>US Representative</td>
                        <td>14</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Warnacut</td>
                        <td>David</td>
                        <td>WI</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Warren</td>
                        <td>Rebekah</td>
                        <td>MI</td>
                        <td>State Representative</td>
                        <td>55</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Waters</td>
                        <td>Allen</td>
                        <td>MA</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Webber</td>
                        <td>Alan</td>
                        <td>NM</td>
                        <td>Mayor of Santa Fe</td>
                        <td>0</td>
                        <td>Elected!</td>
                    </tr>
                    <tr>
                        <td>Wellman</td>
                        <td>Heidi</td>
                        <td>MA</td>
                        <td>US Senator</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Westbrook</td>
                        <td>Brianna</td>
                        <td>AZ</td>
                        <td>US Representative</td>
                        <td>8</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Wheeland</td>
                        <td>Ashley</td>
                        <td>CO</td>
                        <td>State Representative</td>
                        <td>9</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>White</td>
                        <td>Kentiel</td>
                        <td>MI</td>
                        <td>US Representative</td>
                        <td>13</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Whitmire</td>
                        <td>Marc</td>
                        <td>TN</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Williams</td>
                        <td>JM</td>
                        <td>CA</td>
                        <td>US Representative</td>
                        <td>22</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Wilson</td>
                        <td>Justin</td>
                        <td>VA</td>
                        <td>Mayor of Alexandria</td>
                        <td>0</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Wood</td>
                        <td>Dan</td>
                        <td>TX</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Wright</td>
                        <td>Theresa</td>
                        <td>PA</td>
                        <td>US Representative</td>
                        <td>5</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Young</td>
                        <td>Geoffrey</td>
                        <td>KY</td>
                        <td>US Representative</td>
                        <td>6</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    <tr>
                        <td>Youngblood</td>
                        <td>Tanzie</td>
                        <td>NJ</td>
                        <td>US Representative</td>
                        <td>2</td>
                        <td>Pledged Candidate</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <p></p>
    </div>
    <?php
};
genesis();