<?xml version="1.0"?>
<MPD xmlns="urn:mpeg:dash:schema:mpd:2011" minBufferTime="PT1.500000S" type="dynamic" mediaPresentationDuration="PT0H10M54.00S" profiles="urn:mpeg:dash:profile:isoff-live:2011" availabilityStartTime="2017-07-18T22:09:45+00:00" minimumUpdatePeriod="PT597S" suggestedPresentationDelay="PT1S" timeShiftBufferDepth="PT120S" publishTime="2013-08-10T22:03:00+00:00">
  <ProgramInformation moreInformationURL="http://gpac.sourceforge.net">
    <Title>/home/elkhatib/Documents/dash264/TestCases/1b/qualcomm/2_ED_5Sec_MainProf/MultiRate.mpd generated by GPAC</Title>
  </ProgramInformation>
  <BaseURL>http://54.72.87.160/stattodyn/statodyn.php?type=seg&amp;pt=1376172180&amp;avail_start=1500415785&amp;tsbd=120&amp;mup=597&amp;orig_url=http://dash.akamaized.net/dash264/TestCases/1b/qualcomm/2/</BaseURL><Location>http://54.72.87.160/stattodyn/statodyn.php?type=mpd&amp;avail_start=1500415785&amp;pt=1376172180&amp;tsbd=120&amp;mup=597&amp;origmpd=http://dash.akamaized.net/dash264/TestCases/1b/qualcomm/2/MultiRate.mpd</Location><Period id="1" duration="PT0H10M54.00S" start="PT0S">
    <AdaptationSet segmentAlignment="true" maxWidth="1280" maxHeight="720" maxFrameRate="24" par="16:9">
      <Representation id="1" mimeType="video/mp4" codecs="avc1.4d401f" width="1280" height="720" frameRate="24" sar="1:1" startWithSAP="1" bandwidth="1621834">
        <SegmentTemplate timescale="12288" presentationTimeOffset="1024" duration="61440" media="ED_720_1M_MPEG2_video_^$Number$^.mp4&amp;dur=61440&amp;tscale=12288&amp;stnum=1&amp;stime=1024" startNumber="1" initialization="ED_720_1M_MPEG2_video_init.mp4&amp;dur=61440&amp;tscale=12288&amp;stnum=1&amp;stime=1024"/>
      </Representation>
      <Representation id="2" mimeType="video/mp4" codecs="avc1.4d401f" width="1280" height="720" frameRate="24" sar="1:1" startWithSAP="1" bandwidth="2313663">
        <SegmentTemplate timescale="12288" presentationTimeOffset="1024" duration="61440" media="ED_720_2M_MPEG2_video_^$Number$^.mp4&amp;dur=61440&amp;tscale=12288&amp;stnum=1&amp;stime=1024" startNumber="1" initialization="ED_720_2M_MPEG2_video_init.mp4&amp;dur=61440&amp;tscale=12288&amp;stnum=1&amp;stime=1024"/>
      </Representation>
      <Representation id="3" mimeType="video/mp4" codecs="avc1.4d401f" width="1280" height="720" frameRate="24" sar="1:1" startWithSAP="1" bandwidth="4077015">
        <SegmentTemplate timescale="12288" presentationTimeOffset="1024" duration="61440" media="ED_720_4M_MPEG2_video_^$Number$^.mp4&amp;dur=61440&amp;tscale=12288&amp;stnum=1&amp;stime=1024" startNumber="1" initialization="ED_720_4M_MPEG2_video_init.mp4&amp;dur=61440&amp;tscale=12288&amp;stnum=1&amp;stime=1024"/>
      </Representation>
    </AdaptationSet>
    <AdaptationSet segmentAlignment="true">
      <Representation id="4" mimeType="audio/mp4" codecs="mp4a.40.29" audioSamplingRate="48000" startWithSAP="1" bandwidth="33026">
        <AudioChannelConfiguration schemeIdUri="urn:mpeg:dash:23003:3:audio_channel_configuration:2011" value="2"/>
        <SegmentTemplate timescale="48000" duration="239615" media="ED_MPEG2_32k_^$Number$^.mp4&amp;dur=239615&amp;tscale=48000&amp;stnum=1&amp;stime=0" startNumber="1" initialization="ED_MPEG2_32k_init.mp4&amp;dur=239615&amp;tscale=48000&amp;stnum=1&amp;stime=0"/>
      </Representation>
    </AdaptationSet>
  </Period>
</MPD>